<div id="changepic" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="joinBoxLabel" aria-hidden="true">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="changepicLabel">Change your profile picture</h3>
                </div>
                <div class="modal-body">
                  <form action="../picture/ajaxupload.php" method="post" name="sleeker" id="sleeker" enctype="multipart/form-data">
                            <input type="hidden" name="maxSize" value="9999999999" />
                            <input type="hidden" name="maxW" value="200" />
                            <input type="hidden" name="fullPath" value="http://localhost/Map-your-friend/res/usr_img/" />
                            <input type="hidden" name="relPath" value="../../../res/usr_img/" />
                            <input type="hidden" name="colorR" value="255" />
                            <input type="hidden" name="colorG" value="255" />
                            <input type="hidden" name="colorB" value="255" />
                            <input type="hidden" name="maxH" value="300" />
                            <input type="hidden" name="filename" value="filename" />
                            
<p><input type="file" name="filename" onchange="ajaxUpload(this.form,'../picture/ajaxupload.php?filename=name&amp;maxSize=9999999999&amp;maxW=200&amp;fullPath=http://localhost/Map-your-friend/res/usr_img/&amp;relPath=../../../res/usr_img/&amp;colorR=255&amp;colorG=255&amp;colorB=255&amp;maxH=300','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /></p>
</form>

      <div id="upload_area">
</div>
                    
  </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </form>
</div>
