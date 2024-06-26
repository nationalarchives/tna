$(function() {
  // All content must be placed within this IIFE.
  $('a[target="_blank"]').add_attributes_to_target_blank();
  $('#mega-menu-pull-down').show();
  $.polyfillPlaceholder({ targetElement: '#tnaSearch' });
  $.polyfillPlaceholder({ targetElement: '#query' });
  $.moreLinkFocusManager();

  $('ul.sub-menu:last').append_promotional_image();

  $('.mega-menu > ul > li > a').mega_menu_enhancements();

  var recordsHomeBanner = new RandomAsset([
    {
      title:
        'West End London street scene Artist Grace Golden. Catalogue reference: INF 3/1738',
      catRef: 'View in image library',
      src: '/wp-content/themes/tna/images/home/inf-3-1738.jpg',
      relatedLink:
        'https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=24975&index=0&total=1&view=viewSearchItem'
    },
    {
      title: 'Whitstable, 1905. Catalogue reference: COPY 1/228 (98)',
      catRef: 'View in image library',
      src:
        '/wp-content/themes/tna/images/home/copy-1-228-98-whitstable-1905.jpg',
      relatedLink:
        'https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=4333&index=15&total=16&view=viewSearchItem'
    },
    {
      title:
        'Fiji: Copra - Pineapples - Bananas - Sugar; Artist: Keith Henderson. Catalogue reference: CO 956/99',
      catRef: 'View in image library',
      src: '/wp-content/themes/tna/images/home/co-956-99-1927-1933.jpg',
      relatedLink:
        'https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=18102&index=0&total=1&view=viewSearchItem'
    }
  ]);

  recordsHomeBanner.backstretchIt('#home-banner', '#home-img-desc');

  var educationHomeBanner = new RandomAsset([
    {
      title: 'Gym class North Park College, Croydon, 1900.',
      catRef: 'COPY 1/448 (243)',
      src: 'images/section-banner-education.jpg',
      relatedLink:
        'https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=8640&index=0&total=1&view=viewSearchItem'
    }
  ]);

  educationHomeBanner.backstretchIt('#education-home', '#education-img-desc');

  var discoveryBanner = new RandomAsset([
    {
      title: 'Poplar site',
      catRef: 'WORK 25/69-B1-PR-9 ',
      src: 'images/poplar.jpg',
      relatedLink:
        'https://images.nationalarchives.gov.uk/assetbank-nationalarchives/action/viewAsset?id=35501&index=49&total=52&view=viewSearchItem',
      linkTitle: 'Opens in a new window'
    }
  ]);

  discoveryBanner.backstretchIt(
    '#primary-search-box-discovery',
    '#discovery-banner-img-desc'
  );

  // Guidance A-Z
  $guidanceLinks = $('#guidanceLinks li');
  if ($guidanceLinks.length) {
    $guidanceLinks.hide();
    $(function() {
      $('ul#keywords-holder-list li a').click(function() {
        $('#guidanceLinks li').show();
      });
    });
  }
}); // All content must be placed within this IIFE.
