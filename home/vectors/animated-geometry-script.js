/* 04 */
const g4RingOuter = document.querySelector(".g4-ring-outer");
const g4RingLeft = document.querySelector(".g4-ring-left");
const g4RingRight = document.querySelector(".g4-ring-right");
const g4RingCenter = document.querySelector(".g4-ring-center");
const g4Rings = [g4RingLeft, g4RingCenter, g4RingRight];
const g4Size = 220;
const g4Angles = [60, 75, 40];
const g4Tilt = [0, 0, 0];

gsap.set([g4RingOuter, ...g4Rings], {
	xPercent: -50,
	yPercent: -50,
	left: "50%",
	top: "50%",
	width: g4Size,
	height: g4Size
});

gsap.set(g4RingOuter, {
	rotateY: 0,
	rotateX: 0
});

g4Rings.forEach((g4Ring, g4Index) => {
	g4Ring.classList.toggle("is-default", g4Index === 1);
	gsap.set(g4Ring, {
		rotateY: g4Angles[g4Index],
		rotateX: g4Tilt[g4Index]
	});
});

const g4Sequence = [g4RingCenter, g4RingLeft, g4RingRight];

const g4Tl = gsap.timeline({
	repeat: -1,
	repeatDelay: 0.4
});

g4Tl.to(g4Sequence, {
	rotateY: "+=360",
	duration: 3,
	ease: "expo.inOut",
	stagger: 0.3
});
