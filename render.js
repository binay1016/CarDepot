// ============================================================
// SHARED RENDER LOGIC
// Used by both car.html and bike.html.
// It reads the `companies` array and `pageConfig` object that
// were defined in car-data.js or bike-data.js (loaded before
// this file), and builds the page from them.
// ============================================================

// Turns "Royal Enfield" + "Classic 350" into "royal-enfield-classic-350"
function slugify(text) {
  return text
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/(^-|-$)/g, '');
}

function formatPrice(value) {
  return '₹' + Number(value).toLocaleString('en-IN');
}

function renderPage() {
  document.title = 'CarDepot | ' + pageConfig.title;
  document.getElementById('pageIcon').textContent = pageConfig.icon;
  document.getElementById('pageTitle').textContent = pageConfig.title;

  const container = document.getElementById('listingContainer');
  container.innerHTML = '';

  companies.forEach(function (company) {
    const section = document.createElement('div');
    section.className = 'company-section';

    const title = document.createElement('div');
    title.className = 'company-title';
    title.textContent = company.name;
    section.appendChild(title);

    const grid = document.createElement('div');
    grid.className = 'model-grid';

    company.models.forEach(function (model) {
      const modelLabel = typeof model === 'string' ? model : model.name;
      const imageFile = typeof model === 'string'
        ? slugify(company.name) + '-' + slugify(model) + '.webp'
        : model.image;
      const imagePath = pageConfig.imageFolder + '/' + imageFile;
      const defaultImage = pageConfig.imageFolder + '/default.svg';
      const priceValue = typeof model === 'string' ? null : model.price;

      const card = document.createElement('div');
      card.className = 'model-card';
      card.title = priceValue ? 'Rental rate: ' + formatPrice(priceValue) + ' per day' : 'Rental rate available soon';

      // ----------------------------------------------------
      // HOW TO ADD A REAL PHOTO FOR THIS MODEL:
      // 1. Create a folder next to your HTML files called
      //    "images", and inside it a subfolder "cars" or "bikes"
      //    (this already matches pageConfig.imageFolder above).
      // 2. Save your photo using EXACTLY this filename:
      //       << see imagePath below, printed in the console >>
      // 3. Refresh the page — the placeholder icon will
      //    automatically be replaced by your photo.
      // No code changes are needed once the file is named
      // and placed correctly.
      // ----------------------------------------------------
      card.innerHTML =
        '<div class="model-image">' +
          '<div class="image-placeholder">' +
            '<span class="emoji">' + pageConfig.icon + '</span>' +
            '<small>Add image</small>' +
          '</div>' +
          '<img src="' + imagePath + '" alt="' + company.name + ' ' + modelLabel + '" ' +
               'onerror="this.onerror=null;this.src=\'' + defaultImage + '\';">' +
          (priceValue ? '<div class="price-hover"><span>' + formatPrice(priceValue) + '</span><small>per day</small></div>' : '') +
        '</div>' +
        '<div class="model-name">' + modelLabel + '</div>';

      grid.appendChild(card);

      // Helpful for beginners: prints the exact expected filename
      // for every model into the browser console (F12 to view).
      console.log('Expected image for', company.name, model, '->', imagePath);
    });

    section.appendChild(grid);
    container.appendChild(section);
  });
}

renderPage();