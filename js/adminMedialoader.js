var buttonFlag;

jQuery(document).ready(function($) {
    $('#upload_logo_icon_btn').click(function() {
        tb_show('Upload a logo', 'media-upload.php?referer=lorem_settings&type=image&TB_iframe=true&post_id=0', false);
        buttonFlag=1;
        console.log(buttonFlag);
        return false;
    });

    $('#upload_header_bkgr_btn').click(function() {
        tb_show('Upload a background', 'media-upload.php?referer=lorem_settings&type=image&TB_iframe=true&post_id=0', false);
        buttonFlag=2;
        console.log(buttonFlag);
        return false;
    });

    window.send_to_editor = function(html) {
    	var buttomId;
	    var image_url = $('img',html).attr('src');
	    console.log(image_url);
	    if( buttonFlag === 1) {buttomId = "#logo_icon"};
	    if(buttonFlag ===2){ buttomId = "#header_bkgr"};
	    $(buttomId).val(image_url);
	    tb_remove();
	}
});

