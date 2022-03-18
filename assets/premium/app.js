var vm = new Vue({
  el: '#app',
  data: {
    items: [
      {name: 'プレミアム シャンプー', size: "900ml", img:'../assets/premium/img/product001-pr900.jpeg', price: 7800, taxPrice: 8580, purchaseLink: 'https://ifing-beauty.com/products/detail/89', stock: true, sub: false },
      {name: 'プレミアム シャンプー', size: "500ml", img:'../assets/premium/img/product001-pr500.jpeg', price: 5800, taxPrice: 6380, purchaseLink: 'https://ifing-beauty.com/products/detail/88', stock: true, sub: false },
      {name: 'プレミアム シャンプー', size: "200ml", img:'../assets/premium/img/product002-pr200.png', price: 2900, taxPrice: 3190, purchaseLink: 'https://ifing-beauty.com/products/detail/86', stock: true, sub: false},
      {name: 'プレミアム トリートメント', size: "900ml", img:'../assets/premium/img/product001-pr-tr900.jpeg', price: 7500, taxPrice: 8250, purchaseLink: 'https://ifing-beauty.com/products/detail/92', stock: true, sub: false},
      {name: 'プレミアム トリートメント', size: "500ml", img:'../assets/premium/img/product003-pr-tr500.jpeg', price: 5500, taxPrice: 6050, purchaseLink: 'https://ifing-beauty.com/products/detail/91', stock: true, sub: false},
      {name: 'プレミアム トリートメント', size: "200ml", img:'../assets/premium/img/product004-pr-tr200.jpeg', price: 2800, taxPrice: 3080, purchaseLink: 'https://ifing-beauty.com/products/detail/89', stock: true, sub: false},
      {name: 'プレミアム エアートリートメント', size: "100ml", img:'../assets/premium/img/product005-out.oil.jpeg', price: 2800, taxPrice: 3080, purchaseLink: 'https://ifing-beauty.com/products/detail/90', stock: true, sub: false},
      {name: '900サイズセット', size: "《初回特典有》", img:'../assets/premium/img/sub900.jpeg', price: 14535, taxPrice: 15989, purchaseLink: 'https://ifing-beauty.com/products/detail/78', stock: true, sub: true},
      {name: '500サイズセット', size: "《初回特典有》", img:'../assets/premium/img/sub500.jpeg', price: 10735, taxPrice: 11809, purchaseLink: 'https://ifing-beauty.com/products/detail/77', stock: true, sub: true },
      // {name: 'プレミアム シャンプー', size: "500", img:'../assets/premium/img/product001-pr500.jpeg', price: 5800, taxPrice: 6380, purchaseLink: 'https://ifing-beauty.com/products/detail/88', stock: true },
      // {name: 'プレミアム シャンプー', size: "500", img:'../assets/premium/img/product001-pr500.jpeg', price: 5800, taxPrice: 6380, purchaseLink: 'https://ifing-beauty.com/products/detail/88', stock: true },
      // {name: 'TOKIO INKARAMI PR TR.OIL', img:'../assets/premium/img/product001.png', price: 1800, taxPrice: 1980, purchaseLink: 'https://ifing-beauty.com/products/detail/91', stock: true},
    ]
  }
});


var vm = new Vue({
  el: '#subsc',
  data: {
    items: [
      {name: '500サイズセット《初回特典有》', img:'../assets/premium/img/sub900.jpeg', price: 7800, taxPrice: 8580, purchaseLink: 'https://ifing-beauty.com/products/detail/89', stock: true },
      {name: '500サイズセット《初回特典有》', img:'../assets/premium/img/sub500.jpeg', price: 5800, taxPrice: 6380, purchaseLink: 'https://ifing-beauty.com/products/detail/88', stock: true },
    ]
  }
});


// var tri = new Vue({
//   el: '#new',
//   data: {
//     products: [
//       {name: 'TOKIO IE PREMIUM', description: '保湿力抜群しっとりタイプのヘアケア', img: '../assets/premium/img/img-pr-sh200.jpeg', tname: 'AIR.TREATMENT', desctitle: 'ミストタイプのアウトバスTR', description2: 'ケラチン・シルク配合で、保水と潤いを与えながら、髪を補修します。ブロー前にご使用ください。', img2: '../assets/premium/img/air-treatment.jpeg', repair: 4, texture: 4, bubble: 4, desc1: 'TOKIOインカラミのケラチンを使用', desc2: 'シルク・コラーゲン配合で高い保湿力', desc3: 'しっとり感とまとまりが欲しい方に'},
//       {name: 'TOKIO IE PLATINUM', description: 'さらっと軽いタイプのヘアケア', img: '../assets/premium/img/img-pl-sh200.jpeg', tname: 'AIR.TREATMENT', desctitle: 'オイルタイプのアウトバスTR', description2: '保湿成分配合で滑らかさ・軽さとまとまりの実感。アイロンやコテを使用する際にもおすすめです。', img2: '../assets/premium/img/air-treatment.jpeg', repair: 3, texture: 3, bubble: 4, desc1: 'TOKIOインカラミのケラチンを使用', desc2: '豊富な泡立ちで髪を柔らかく', desc3: 'さらっとした指通りが欲しい方に'},
//     ]
//   }
// });

var vm = new Vue({
  el: '#gallery',
  data: {
    pictures: [
      {id: 1, img: '../assets/premium/img/gallery1.jpg', text: 'インスタ画像1'},
      {id: 2, img: '../assets/premium/img/gallery2.jpg', text: 'インスタ画像2'},
      {id: 3, img: '../assets/premium/img/gallery3.jpg', text: 'インスタ画像3'},
      {id: 4, img: '../assets/premium/img/gallery4.jpg', text: 'インスタ画像4'},
      {id: 5, img: '../assets/premium/img/gallery5.jpg', text: 'インスタ画像5'},
      {id: 6, img: '../assets/premium/img/gallery6.jpg', text: 'インスタ画像6'},
      {id: 7, img: '../assets/premium/img/gallery7.jpg', text: 'インスタ画像7'},
      {id: 8, img: '../assets/premium/img/gallery8.jpg', text: 'インスタ画像8'},
      {id: 9, img: '../assets/premium/img/gallery9.jpg', text: 'インスタ画像9'},
    ]
  }
});


var vm = new Vue({
  el: '#prodChar',
  data: {
    characteristics: [
      {id: 1, img: '../assets/premium/img/img001-shampoo.jpg', body: '優れた保湿効果とケラチン（補修剤）のケア効果でリッチに洗い上げます。厚みのある泡が、痛んで乾燥した髪のパサつきを解消して、まとまりを与えます。', title: 'TOKIO IE プレミアム シャンプー'},
      {id: 2, img: '../assets/premium/img/img001-treatment.jpg', body: '分子量の異なる4種類のケラチン（補修剤）が髪にハリコシと補修効果を与え、加水分解シルク・コラーゲン・ダイズ・ゴマの各PPTが弾力としっとりとした潤いのある髪に仕上げます。', title: 'TOKIO IE プレミアム トリートメント'},
      {id: 3, img: '../assets/premium/img/img001-premiumair.jpg', body: 'ケラチンとCMC成分が痛んだ髪をしっかりと補修・保湿するミストタイプの洗い流さないケアトリートメント。髪の芯まで素早く浸透し、毛先までたっぷりの潤いと抜群の光沢感を与えます。', title: 'TOKIO IE プレミアム エアトリートメント'},
    ]
  }
});

var vm = new Vue({
  el: '#whatIsInkarami',
  data: {
    information: [
      {image: '../assets/premium/img/tokio-ie-inkarami.png', body: 'TOKIO インカラミのホームケアシリーズTOKIO IE。シャンプーとトリートメントでインカラミする世界初の家庭用システムトリートメント。シャンプーにTOKIO 1、トリートメントにTOKIO 2.3.4が配合されており、いつも通りにシャンプーとトリートメントをするだけで、お風呂で簡単にTOKIO インカラミを体験できます。さらに独自処方アウトカラミを用いた洗い流さないトリートメントで上品な艶と指通りを与えます。イエでインカラミができる、ホームケアの新習慣をご提案します。'},
    ]
  }
});

var vm = new Vue({
  el: '#premium',
  data: {
    factoid: [
      // {image: '../assets/premium/img/tokio-ie-inkarami.png', body: 'TOKIO インカラミのホームケアシリーズTOKIO IE。シャンプーとトリートメントでインカラミする世界初の家庭用システムトリートメント。シャンプーにTOKIO 1、トリートメントにTOKIO 2.3.4が配合されており、いつも通りにシャンプーとトリートメントをするだけで、お風呂で簡単にTOKIO インカラミを体験できます。さらに独自処方アウトカラミを用いた洗い流さないトリートメントで上品な艶と指通りを与えます。イエでインカラミができる、ホームケアの新習慣をご提案します。'},
      {img1: '../assets/premium/img/tokio-ie-premium.png', img2: '../assets/premium/img/premium-2.png', body: 'シルクとコラーゲンのPPT活性剤を使用したPREMIUMシリーズはハイダメージ毛・乾燥毛の方に特にオススメ。TOKIO INKARAMIサロントリートメントのモイスチャーラインの仕上がりを実現。一番しっとりで、柔らかくパサつきを抑え、泡はもっちりとしています。一度使えばその補修力・保湿力の圧倒的な効果を実感いただけます。'},
    ]
  }
});