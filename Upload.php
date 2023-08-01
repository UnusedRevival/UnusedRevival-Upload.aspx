<div>&nbsp;</div>
<h1><strong>&nbsp;Upload</strong></h1>
<div>&nbsp;</div>
<p><strong>&nbsp;Account ID: 5 (TestUser)</strong></p>
<p><strong>&nbsp;Place ID: 1 (N/A)</strong></p>
<div>&nbsp;</div>
&nbsp;<button onClick="javascript:Upload('http://cm3.ct8.pl/uploadGame.php?pid=1&uid=5')">Upload</button>
<script>
    function Upload(uploadLink){
        //check if we are in IE - cause it means we most likely in Roblossss 
        if (window.document.documentMode) {
            try{
                var Content = window.external.Write();
                Content.Upload(uploadLink);
                alert("Done!");
            }catch(ex){
                alert("To update or create new places, please use the ROBLOX client.");
            }
        }else{
            alert("To update or create new places, please use the ROBLOX client.");
        }
    }
    // automatically setted to test user and placeid 1 for now
</script>