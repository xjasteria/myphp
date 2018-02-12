Page({
  data: {
    indicatorDots: false,
    autoplay: true,
    interval: 5000,
    duration: 1000,
    imgUrls: [
      "../../images/haibao/1.jpg",
      "../../images/haibao/2.jpg",
      "../../images/haibao/3.jpg",
      "../../images/haibao/4.jpg"
    ],
    navs: []
  },
  onLoad: function (options) {
    var page = this;
    var navs = this.loadNavData();
    page.setData({ navs: navs });
  },
  navBtn: function (e) {
    console.log(e);
    var id = e.currentTarget.id;
    if (id == "5") {
      wx.navigateTo({
        url: '../type/type'
      })
    }

  },
  loadNavData: function () {
    var navs = [];
    var nav0 = new Object();
    nav0.img = '../../images/nav/dxy.jpg';
    nav0.name = '店铺简介';
    navs[0] = nav0;

    var nav1 = new Object();
    nav1.img = '../../images/nav/phz.jpg';
    nav1.name = '咖啡图片';
    navs[1] = nav1;

    var nav2 = new Object();
    nav2.img = '../../images/nav/zhq.jpg';
    nav2.name = '预订咖啡';
    navs[2] = nav2;

    var nav3 = new Object();
    nav3.img = '../../images/nav/zhc.jpg';
    nav3.name = '咖啡外送';
    navs[3] = nav3;

    var nav4 = new Object();
    nav4.img = '../../images/nav/wz.jpg';
    nav4.name = '小店位置';
    navs[4] = nav4;

    var nav5 = new Object();
    nav5.img = '../../images/nav/qbfl.jpg';
    nav5.name = '全部分类';
    navs[5] = nav5;
    return navs;
  }
})