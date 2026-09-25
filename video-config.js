// Keep all your portfolio video URLs here in one central spot
const videoLinks = {
"citybox-laptop": "https://m3orange.com/portfolio/portfolio-assets/videos/citybox-screens-in-laptop.mp4",
"citybox-laptop-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/citybox-screens-in-laptop-poster.jpg",
"citybox-laptop-vimeo": "https://vimeo.com/1224453001",
"citybox-microsite": "https://m3orange.com/portfolio/portfolio-assets/videos/atlas-ds-microsite-walkthrough-1300px.gif",
// Poster: Null
// Vimeo link: Null
"admin-demo": "https://m3orange.com/portfolio/portfolio-assets/videos/admin-demo-loop.mp4",
"admin-demo-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/admin-demo-loop-poster.jpg",
"admin-demo-vimeo": "https://vimeo.com/1212013835",
"musicasa-demo": "https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-demo-260519_1336.mp4",
"musicasa-demo-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-demo-260519_1336-poster.png",
"musicasa-demo-vimeo" :"https://vimeo.com/1224471910",
"musicasa-mobile": "https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-mobile-views.mp4",
"musicasa-mobile-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/musicasa-mobile-views-poster.png",
"musicasa-mobile-vimeo" :"PENDING",
"space-scout-cityscapes": "https://m3orange.com/portfolio/portfolio-assets/videos/space-scout-city-sequence.mp4",
"space-scout-cityscapes-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/space-scout-city-sequence-poster.png",
"space-scout-cityscapes-vimeo" :"https://vimeo.com/1224471912",
"map-tools-demo-light": "https://m3orange.com/portfolio/portfolio-assets/videos/map-tools-demo-light.mp4",
"map-tools-demo-light-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/map-tools-demo-light-poster.jpg",
"map-tools-demo-light-vimeo" :"https://vimeo.com/1224455245",
"map-tools-demo-dark": "https://m3orange.com/portfolio/portfolio-assets/videos/map-tools-demo-dark.webm",
"map-tools-demo-dark-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/map-tools-demo-dark-poster.jpg",
"map-tools-demo-dark-vimeo" :"https://vimeo.com/1224471408",
"idd-demo-loop": "https://m3orange.com/portfolio/portfolio-assets/videos/idd-demo-loop.mp4",
"idd-demo-loop-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/idd-demo-loop-poster.jpg",
"idd-demo-loop-vimeo" :"https://vimeo.com/1224455244",
"home-hero-anim": "https://m3orange.com/portfolio/portfolio-assets/animations/260919-meshic-poly-anim-contrast.mp4"
};

// JS that makes play/pause button work is in the pagination include

// Add these:

// "space-scout-walkthrough": "https://m3orange.com/portfolio/portfolio-assets/videos/space-scout-walkthrough.mp4",
// "space-scout-walkthrough-poster": "https://m3orange.com/portfolio/portfolio-assets/videos/space-scout-walkthrough-poster.jpg",
// "space-scout-walkthrough-vimeo":  "NEED TO RECORD AGAIN",


// This automatically injects the links wherever they belong when a page loads
document.addEventListener("DOMContentLoaded", () => {
    for (const [id, url] of Object.entries(videoLinks)) {
    const element = document.getElementById(id);
    if (element) {
    if (element.tagName === 'VIDEO' || element.tagName === 'SOURCE') {
    element.src = url;
    // Reloads the video player so it sees the new file path
    element.closest('video')?.load();
    } else if (element.tagName === 'A') {
    element.href = url;
    }
    }
    }
});