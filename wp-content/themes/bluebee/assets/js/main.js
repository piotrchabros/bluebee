/**
 * Bluebee Theme — Main JavaScript
 * Handles: custom cursor, scroll animations, counter, marquee,
 *          magnetic buttons, word cycling, header behaviour, AJAX form
 */

( function () {
	'use strict';

	/* ── Utility ──────────────────────────────────────────────── */
	const $ = ( sel, ctx = document ) => ctx.querySelector( sel );
	const $$ = ( sel, ctx = document ) => Array.from( ctx.querySelectorAll( sel ) );
	const on = ( el, ev, fn, opts ) => el && el.addEventListener( ev, fn, opts );
	const raf = requestAnimationFrame;

	/* ── Page Loader ──────────────────────────────────────────── */
	function initLoader() {
		const loader = document.createElement( 'div' );
		loader.className = 'bb-loader';
		loader.setAttribute( 'aria-hidden', 'true' );
		loader.innerHTML = '<div class="bb-loader__line"></div>';
		document.body.prepend( loader );

		on( window, 'load', () => {
			setTimeout( () => loader.classList.add( 'is-hidden' ), 900 );
		} );
	}

	/* ── Custom Cursor ────────────────────────────────────────── */
	function initCursor() {
		if ( window.matchMedia( '(pointer: coarse)' ).matches ) return;

		const cursor = document.createElement( 'div' );
		cursor.id = 'bb-cursor';
		cursor.setAttribute( 'aria-hidden', 'true' );
		document.body.appendChild( cursor );

		let mx = -100, my = -100, cx = -100, cy = -100;

		on( document, 'mousemove', e => {
			mx = e.clientX;
			my = e.clientY;
		} );

		on( document, 'mousedown',  () => cursor.classList.add( 'is-clicking' ) );
		on( document, 'mouseup',    () => cursor.classList.remove( 'is-clicking' ) );
		on( document, 'mouseleave', () => { cursor.style.opacity = '0'; } );
		on( document, 'mouseenter', () => { cursor.style.opacity = ''; } );

		// Hover state on interactive elements
		on( document, 'mouseover', e => {
			const target = e.target.closest( 'a, button, [data-cursor-hover]' );
			cursor.classList.toggle( 'is-hovering', !!target );
		} );

		// Smooth lerp follow
		function lerp( a, b, t ) { return a + ( b - a ) * t; }
		function loop() {
			cx = lerp( cx, mx, 0.12 );
			cy = lerp( cy, my, 0.12 );
			cursor.style.transform = `translate(${cx}px, ${cy}px) translate(-50%, -50%)`;
			raf( loop );
		}
		loop();
	}

	/* ── Scroll Animations (Intersection Observer) ─────────────── */
	function initScrollAnimations() {
		const elements = $$( '.bb-animate' );
		if ( ! elements.length ) return;

		const observer = new IntersectionObserver(
			( entries ) => {
				entries.forEach( entry => {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
		);

		elements.forEach( el => observer.observe( el ) );
	}

	/* ── Counter Animation ────────────────────────────────────── */
	// Targets elements with class .bb-stat-number. The number is read from
	// the element's text content (e.g. "200+", "$500M+", "98%") so no
	// data attributes are needed — numbers stay fully editable in Gutenberg.
	function initCounters() {
		const counters = $$( '.bb-stat-number' );
		if ( ! counters.length ) return;

		function easeOutExpo( t ) {
			return t === 1 ? 1 : 1 - Math.pow( 2, -10 * t );
		}

		function animateCounter( el ) {
			const raw      = el.textContent.trim();
			// Extract leading non-digit prefix (e.g. "$"), digits, and trailing suffix (e.g. "M+", "%", "+")
			const match    = raw.match( /^([^0-9]*)(\d+)(.*)$/ );
			if ( ! match ) return;
			const prefix   = match[1];
			const target   = parseInt( match[2], 10 );
			const suffix   = match[3];
			const duration = 1600;
			const start    = performance.now();

			function update( now ) {
				const elapsed  = now - start;
				const progress = Math.min( elapsed / duration, 1 );
				const value    = Math.round( easeOutExpo( progress ) * target );
				el.textContent = prefix + value.toLocaleString() + suffix;
				if ( progress < 1 ) raf( update );
			}
			raf( update );
		}

		const observer = new IntersectionObserver(
			( entries ) => {
				entries.forEach( entry => {
					if ( entry.isIntersecting ) {
						animateCounter( entry.target );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.5 }
		);

		counters.forEach( el => observer.observe( el ) );
	}

	/* ── Scroll Indicator ─────────────────────────────────────── */
	// Injected via JS so the hero pattern stays pure Gutenberg blocks.
	function initScrollIndicator() {
		const hero = $( '.bb-hero' );
		if ( ! hero ) return;
		const indicator = document.createElement( 'div' );
		indicator.className = 'bb-hero__scroll-indicator';
		indicator.setAttribute( 'aria-hidden', 'true' );
		indicator.innerHTML = '<div class="bb-scroll-line"></div>';
		hero.appendChild( indicator );
	}

	/* ── Word Cycling ─────────────────────────────────────────── */
	function initWordCycle() {
		// The heading renders as plain text from the block; we inject the
		// animated span by splitting off the last word at runtime.
		const heading = $( '.bb-hero__heading' );
		if ( ! heading ) return;

		// Split "We Make Brands Unforgettable" → keep first part, animate last word
		const text  = heading.textContent.trim();
		const parts = text.split( ' ' );
		const last  = parts.pop();
		const rest  = parts.join( ' ' );

		heading.innerHTML =
			rest + '<br><span class="bb-hero__word-cycle" aria-live="polite">' + last + '</span>';

		const el = $( '.bb-hero__word-cycle', heading );
		if ( ! el ) return;

		const words = [
			'Unforgettable',
			'Unstoppable',
			'Iconic',
			'Distinct',
			'Magnetic',
			'Extraordinary',
		];

		let index     = 0;
		let charIndex = 0;
		let isDeleting = false;

		el.setAttribute( 'role', 'text' );
		el.style.color           = 'var(--bb-blue)';
		el.style.display         = 'inline-block';
		el.style.minWidth        = '10ch';
		el.style.borderRight     = '2px solid var(--bb-blue)';
		el.style.paddingRight    = '2px';
		el.style.animation       = 'bb-blink 0.85s step-end infinite';

		// Inject keyframe dynamically
		if ( ! document.getElementById( 'bb-blink-style' ) ) {
			const style = document.createElement( 'style' );
			style.id = 'bb-blink-style';
			style.textContent = `
				@keyframes bb-blink {
					0%, 100% { border-right-color: var(--bb-blue); }
					50%       { border-right-color: transparent; }
				}
			`;
			document.head.appendChild( style );
		}

		function type() {
			const current = words[ index ];

			if ( isDeleting ) {
				el.textContent = current.substring( 0, charIndex - 1 );
				charIndex--;
			} else {
				el.textContent = current.substring( 0, charIndex + 1 );
				charIndex++;
			}

			let delay = isDeleting ? 60 : 100;

			if ( ! isDeleting && charIndex === current.length ) {
				delay = 2000;
				isDeleting = true;
			} else if ( isDeleting && charIndex === 0 ) {
				isDeleting = false;
				index = ( index + 1 ) % words.length;
				delay = 400;
			}

			setTimeout( type, delay );
		}

		// Start after brief delay
		setTimeout( type, 800 );
	}

	/* ── Magnetic Buttons ─────────────────────────────────────── */
	function initMagnetic() {
		const magnetics = $$( '.bb-magnetic' );

		magnetics.forEach( el => {
			const strength = 0.35;

			on( el, 'mousemove', e => {
				const rect   = el.getBoundingClientRect();
				const cx     = rect.left + rect.width  / 2;
				const cy     = rect.top  + rect.height / 2;
				const dx     = ( e.clientX - cx ) * strength;
				const dy     = ( e.clientY - cy ) * strength;
				el.style.transform = `translate(${dx}px, ${dy}px)`;
			} );

			on( el, 'mouseleave', () => {
				el.style.transition = 'transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
				el.style.transform  = 'translate(0, 0)';
				setTimeout( () => { el.style.transition = ''; }, 500 );
			} );
		} );
	}

	/* ── Header Scroll Behaviour ──────────────────────────────── */
	function initHeader() {
		const header = $( '.bb-header' );
		if ( ! header ) return;

		on( window, 'scroll', () => {
			header.classList.toggle( 'is-scrolled', window.scrollY > 20 );
		}, { passive: true } );
	}

	/* ── AJAX Contact Form ────────────────────────────────────── */
	function initContactForm() {
		const form = $( '#bb-contact-form' );
		if ( ! form ) return;

		const config = window.BluebeeConfig || {};
		const i18n   = config.i18n || {};
		const status = $( '.bb-form-status', form );
		const submitBtn = $( '.bb-form-submit', form );
		const submitText = $( '.bb-form-submit__text', form );

		on( form, 'submit', async e => {
			e.preventDefault();

			if ( submitBtn.disabled ) return;

			// Simple validation
			const name    = form.elements.name.value.trim();
			const email   = form.elements.email.value.trim();
			const message = form.elements.message.value.trim();

			if ( ! name || ! email || ! message ) {
				showStatus( 'error', i18n.error || 'Please fill in all fields.' );
				return;
			}

			if ( ! /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test( email ) ) {
				showStatus( 'error', 'Please enter a valid email address.' );
				return;
			}

			// Loading state
			submitBtn.disabled = true;
			if ( submitText ) submitText.textContent = i18n.sending || 'Sending…';
			hideStatus();

			// Build form data
			const data = new FormData( form );
			data.set( 'action', 'bluebee_contact' );

			try {
				const res  = await fetch( config.ajaxUrl || '/wp-admin/admin-ajax.php', {
					method: 'POST',
					body: data,
					credentials: 'same-origin',
				} );
				const json = await res.json();

				if ( json.success ) {
					showStatus( 'success', json.data?.message || i18n.sent || 'Message sent!' );
					form.reset();
				} else {
					showStatus( 'error', json.data?.message || i18n.error || 'Something went wrong.' );
				}
			} catch {
				showStatus( 'error', i18n.error || 'Network error. Please try again.' );
			} finally {
				submitBtn.disabled = false;
				if ( submitText ) submitText.textContent = 'Send Message';
			}
		} );

		function showStatus( type, message ) {
			status.textContent = message;
			status.className   = `bb-form-status is-${type}`;
		}
		function hideStatus() {
			status.textContent = '';
			status.className   = 'bb-form-status';
		}
	}

	/* ── Smooth Anchor Scroll ─────────────────────────────────── */
	function initSmoothScroll() {
		on( document, 'click', e => {
			const link = e.target.closest( 'a[href^="#"]' );
			if ( ! link ) return;
			const href = link.getAttribute( 'href' );
			if ( href === '#' ) return;
			const target = document.getElementById( href.slice( 1 ) );
			if ( ! target ) return;
			e.preventDefault();
			const headerHeight = $( '.bb-header' )?.offsetHeight || 80;
			const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 24;
			window.scrollTo( { top, behavior: 'smooth' } );
		} );
	}

	/* ── Init ─────────────────────────────────────────────────── */
	function init() {
		initLoader();
		initCursor();
		initScrollAnimations();
		initCounters();
		initScrollIndicator();
		initWordCycle();
		initMagnetic();
		initHeader();
		initContactForm();
		initSmoothScroll();
	}

	if ( document.readyState === 'loading' ) {
		on( document, 'DOMContentLoaded', init );
	} else {
		init();
	}

} )();
