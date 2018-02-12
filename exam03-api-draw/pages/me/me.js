Page({
  onLoad: function (options) {
    const ctx = wx.createCanvasContext('myCanvas')
    ctx.rect(10,10,150,75)
    ctx.setFillStyle('red')
    ctx.fill()
    ctx.draw()
  }
})