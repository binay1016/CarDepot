// ============================================================
// BIKE DATA
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
//   Example: company "KTM", model "RC 200"
//            -> ktm-rc-200.jpg
//
// See the comment block in render.js for the exact folder path
// and step-by-step instructions on adding your own photos.
// ============================================================

const pageConfig = {
  title: 'Available Bikes',
  icon: '🏍️',
  imageFolder: 'images/bikes'   // <-- put your bike photos in this folder
};

const companies = [
  {
    name: 'Yamaha',
    models: [
      { name: 'FZ-S V4', image: 'FZS-V4.webp', price: 800 },
      { name: 'FZ-X', image: 'FZ-X.webp', price: 900 },
      { name: 'MT-15 V2', image: 'MT-15 v2.webp', price: 1100 },
      { name: 'R15 V4', image: 'R15 v4.webp', price: 1200 },
      { name: 'Aerox 155', image: 'Aerox 155.webp', price: 1000 }
    ]
  },
  {
    name: 'Honda',
    models: [
      { name: 'Shine 125', image: 'Shine 125.webp', price: 600 },
      { name: 'SP125', image: 'SP 125.webp', price: 650 },
      { name: 'Unicorn', image: 'Unicorn.webp', price: 700 },
      { name: 'Hornet 2.0', image: 'Hornet 2.0.webp', price: 900 },
      { name: 'CB350RS', image: 'CB350RS.webp', price: 1600 }
    ]
  },
  {
    name: 'Bajaj',
    models: [
      { name: 'Pulsar N125', image: 'N125.webp', price: 700 },
      { name: 'Pulsar N160', image: 'N160.webp', price: 850 },
      { name: 'Pulsar N250', image: 'N250.webp', price: 950 },
      { name: 'Pulsar NS400Z', image: 'NS400z.webp', price: 1400 },
      { name: 'Dominar 400', image: 'Dominar 400.webp', price: 1300 }
    ]
  },
  {
    name: 'KTM',
    models: [
      { name: 'Duke 200', image: 'Duke 200.webp', price: 850 },
      { name: 'Duke 250', image: 'Duke 250.webp', price: 1000 },
      { name: 'Duke 390', image: 'Duke 390.webp', price: 1400 },
      { name: 'RC 200', image: 'RC 200.webp', price: 1100 },
      { name: 'RC 390', image: 'RC 390.webp', price: 1500 }
    ]
  },
  {
    name: 'Royal Enfield',
    models: [
      { name: 'Hunter 350', image: 'Hunter 350.webp', price: 900 },
      { name: 'Classic 350', image: 'Classic 350.webp', price: 1000 },
      { name: 'Bullet 350', image: 'Bullet 350.webp', price: 950 },
      { name: 'Meteor 350', image: 'Meteor 350.webp', price: 1100 },
      { name: 'Himalayan 450', image: 'Himalayan 450.webp', price: 1800 }
    ]
  },
  {
    name: 'Triumph',
    models: [
      { name: 'Speed 400', image: 'Speed 400.webp', price: 1800 },
      { name: 'Scrambler 400 X', image: 'Scrambler 400x.webp', price: 2000 },
      { name: 'Speed T4', image: 'Speed T4.webp', price: 2200 }
    ]
  }
];