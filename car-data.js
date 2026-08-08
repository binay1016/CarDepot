// ============================================================
// CAR DATA
// ------------------------------------------------------------
// Add, remove, or edit companies and models here.
// Each model automatically gets an image slot on the page.
//
// HOW IMAGE FILENAMES ARE BUILT (read this before adding photos):
//   filename = company name + "-" + model name, all lowercase,
//   spaces turned into hyphens.
//
//   Example: company "Royal Enfield", model "Classic 350"
//            -> royal-enfield-classic-350.jpg
//
//   Example: company "BYD", model "Atto 1"
//            -> byd-atto-1.jpg
//
// See the comment block in render.js for the exact folder path
// and step-by-step instructions on adding your own photos.
// ============================================================

const pageConfig = {
  title: 'Available Cars',
  icon: '🚗',
  imageFolder: 'images/cars'   // <-- put your car photos in this folder
};

const companies = [
  {
    name: 'BYD',
    models: [
      { name: 'Atto 1', image: 'Atto 1.webp', price: 3000 },
      { name: 'Atto 2', image: 'Atto 2.webp', price: 3200 },
      { name: 'Atto 3', image: 'Atto 3.webp', price: 3500 },
      { name: 'Sealion', image: 'Sealion.webp', price: 4400 }
    ]
  },
  {
    name: 'Deepal',
    models: [
      { name: 'E07', image: 'E07.webp', price: 4000 },
      { name: 'S07', image: 'S07.webp', price: 4500 },
      { name: 'L07', image: 'L07.webp', price: 4800 },
      { name: 'S07', image: 'S07.webp', price: 4700 }
    ]
  },
  {
    name: 'Hyundai',
    models: [
      { name: 'Creta', image: 'Creta.webp', price: 2500 },
      { name: 'Venue', image: 'Venue.webp', price: 2200 },
      { name: 'Creta Electric', image: 'Creta Electric.webp', price: 3200 },
      { name: 'Verna', image: 'Verna.webp', price: 3000 }
    ]
  },
  {
    name: 'Kia',
    models: [
      { name: 'Seltos', image: 'Seltos.webp', price: 2800 },
      { name: 'Sonet', image: 'Sonet.webp', price: 2500 },
      { name: 'Sportage', image: 'Sportage.webp', price: 4000 }
    ]
  },
  {
    name: 'Nissan',
    models: [
      { name: 'Kicks', image: 'Kicks.webp', price: 2500 },
      { name: 'Magnite', image: 'Magnite.webp', price: 2600 },
      { name: 'X-Trail', image: 'X-Trail.webp', price: 5000 }
    ]
  },
  {
    name: 'Suzuki',
    models: [
      { name: 'Fronx', image: 'Fronx.webp', price: 2200 },
      { name: 'Brezza', image: 'Brezza.webp', price: 2100 },
      { name: 'Grand Vitara', image: 'Grand Vitara.webp', price: 3000 },
      { name: 'Jimny', image: 'Jimny.webp', price: 3200 },
      { name: 'Swift', image: 'Swift.webp', price: 2000 }
    ]
  }
];