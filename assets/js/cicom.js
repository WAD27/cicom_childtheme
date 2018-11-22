jQuery(document).ready(function() {
  // overrides
  jQuery('.blog-read-more a').html("Leer más")
  // temina overides

  img_liquid()


  console.log("CICOM OK.");

})


function img_liquid() {

  $(".imgLiquidFill").imgLiquid();
  $(".imgLiquidFillNoFill").imgLiquid({
    fill: true
  });

}
