<div style="visibility:hidden;" id="googlenews_popup_div"></div>
<script type="text/javascript" src="{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}"></script>
<script type="text/javascript">
function show_ext_rest_googlenews(event)
{literal} 
{

var xCoordinate = event.clientX;
var yCoordinate = event.clientY;
var isIE = document.all?true:false;
      
if(isIE) {
    xCoordinate = xCoordinate + document.body.scrollLeft;
    yCoordinate = yCoordinate + document.body.scrollTop;
}

{/literal}

cd = new CompanyDetailsDialog("googlenews_popup_div", 
  '<iframe height="90px" width="728px" frameborder="0" marginheight=0 marginwidth=0 scrolling="no" src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?rsz=small&q={$fields.{{$mapping_name}}.value}&format=728x90"></iframe>',
  xCoordinate, yCoordinate);
cd.setHeader("{$fields.{{$mapping_name}}.value}");
cd.display();
{literal}
} 
{/literal}
</script>