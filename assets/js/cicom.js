jQuery(document).ready(function($) {
  // overrides
  jQuery('.blog-read-more a').html("Leer más")
  // temina overides

  img_liquid()

  console.log("CICOM scripts OK.");

});

// funciones
function img_liquid() {

  jQuery(".imgLiquid.imgLiquidFill").imgLiquid()

  jQuery(".imgLiquid.imgLiquidNoFill").imgLiquid({fill:false})

  jQuery(".imgLiquid.imgLiquidNoFillLeft").imgLiquid({
    fill:false,
    horizontalAlign:"left"
  })
  jQuery(".imgLiquid.imgLiquidNoFillRight").imgLiquid({
    fill:false,
    horizontalAlign:"right"
  })

}
// terminan funciones
