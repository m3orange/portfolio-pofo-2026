import { useEffect } from "react";

declare var $: any;

interface GalleryColumn {
  id: string;
  title: string;
  images: { thumb: string; full: string; title: string }[];
}

const columns: GalleryColumn[] = [
  {
    id: "gallery-nature",
    title: "Nature",
    images: [
      { thumb: "https://picsum.photos/seed/nat1/600/400", full: "https://picsum.photos/seed/nat1/1600/1067", title: "Forest Path" },
      { thumb: "https://picsum.photos/seed/nat2/600/400", full: "https://picsum.photos/seed/nat2/1600/1067", title: "Mountain Lake" },
      { thumb: "https://picsum.photos/seed/nat3/600/400", full: "https://picsum.photos/seed/nat3/1600/1067", title: "Autumn Leaves" },
      { thumb: "https://picsum.photos/seed/nat4/600/400", full: "https://picsum.photos/seed/nat4/1600/1067", title: "Waterfall" },
      { thumb: "https://picsum.photos/seed/nat5/600/400", full: "https://picsum.photos/seed/nat5/1600/1067", title: "Sunset Meadow" },
      { thumb: "https://picsum.photos/seed/nat6/600/400", full: "https://picsum.photos/seed/nat6/1600/1067", title: "Misty Valley" },
    ],
  },
  {
    id: "gallery-architecture",
    title: "Architecture",
    images: [
      { thumb: "https://picsum.photos/seed/arch1/600/400", full: "https://picsum.photos/seed/arch1/1600/1067", title: "City Skyline" },
      { thumb: "https://picsum.photos/seed/arch2/600/400", full: "https://picsum.photos/seed/arch2/1600/1067", title: "Modern Bridge" },
      { thumb: "https://picsum.photos/seed/arch3/600/400", full: "https://picsum.photos/seed/arch3/1600/1067", title: "Glass Tower" },
      { thumb: "https://picsum.photos/seed/arch4/600/400", full: "https://picsum.photos/seed/arch4/1600/1067", title: "Historic Facade" },
      { thumb: "https://picsum.photos/seed/arch5/600/400", full: "https://picsum.photos/seed/arch5/1600/1067", title: "Spiral Staircase" },
      { thumb: "https://picsum.photos/seed/arch6/600/400", full: "https://picsum.photos/seed/arch6/1600/1067", title: "Marble Columns" },
    ],
  },
  {
    id: "gallery-travel",
    title: "Travel",
    images: [
      { thumb: "https://picsum.photos/seed/trav1/600/400", full: "https://picsum.photos/seed/trav1/1600/1067", title: "Cobblestone Street" },
      { thumb: "https://picsum.photos/seed/trav2/600/400", full: "https://picsum.photos/seed/trav2/1600/1067", title: "Harbor at Dusk" },
      { thumb: "https://picsum.photos/seed/trav3/600/400", full: "https://picsum.photos/seed/trav3/1600/1067", title: "Desert Dunes" },
      { thumb: "https://picsum.photos/seed/trav4/600/400", full: "https://picsum.photos/seed/trav4/1600/1067", title: "Tropical Beach" },
      { thumb: "https://picsum.photos/seed/trav5/600/400", full: "https://picsum.photos/seed/trav5/1600/1067", title: "Mountain Village" },
      { thumb: "https://picsum.photos/seed/trav6/600/400", full: "https://picsum.photos/seed/trav6/1600/1067", title: "Ancient Ruins" },
    ],
  },
];

export default function Gallery() {
  useEffect(() => {
    if (typeof $ === "undefined") return;

    columns.forEach((col) => {
      $(`.${col.id}`).magnificPopup({
        delegate: "a",
        type: "image",
        gallery: { enabled: true },
        image: {
          titleSrc: (item: any) => item.el.attr("data-title"),
        },
        callbacks: {
          buildControls() {
            this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
          },
        },
      });
    });

    return () => {
      columns.forEach((col) => {
        try {
          $(`.${col.id}`).magnificPopup("close");
        } catch (_) {}
      });
    };
  }, []);

  return (
    <div className="gallery-page">
      <header className="gallery-header">
        <h1>Photo Gallery</h1>
        <p>Click any image to open that collection in a lightbox</p>
      </header>

      <div className="gallery-grid">
        {columns.map((col) => (
          <div key={col.id} className="gallery-column">
            <h2 className="column-title">{col.title}</h2>
            <div className={`gallery-thumbs ${col.id}`}>
              {col.images.map((img, idx) => (
                <a
                  key={idx}
                  href={img.full}
                  data-title={img.title}
                  className="thumb-link"
                >
                  <div className="thumb-wrap">
                    <img src={img.thumb} alt={img.title} loading="lazy" />
                    <div className="thumb-overlay">
                      <span className="thumb-title">{img.title}</span>
                      <span className="thumb-icon">&#8599;</span>
                    </div>
                  </div>
                </a>
              ))}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
