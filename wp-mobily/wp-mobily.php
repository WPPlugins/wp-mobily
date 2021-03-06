<?php
$iphoneTheme 		= get_option('iphone_theme');
$ipadTheme			= get_option('ipad_theme');
$androidTheme		= get_option('android_theme');
$androidTabTheme	= get_option('android_tab_theme');
	

$themeList 			= get_themes();
$themeNames 		= array_keys($themeList); 
$defaultTheme 		= get_current_theme();
natcasesort($themeNames);
?>

<table class="wp-list-table widefat fixed bookmarks">
        <thead>
            <tr>
                <th>Select Theme For Devices</th>
            </tr>
        </thead>
        <tbody>
        <tr>
          <td>
    
    <table class="form-table">
         <tr valign="top">
        <th scope="row">iPod & iphone Theme:</th>
        <td>
        	<select name="iphone_theme">
			 <?php 
              foreach ($themeNames as $themeName) {              
                  if (($iphoneTheme == $themeName) || (($iphoneTheme == '') && ($themeName == $defaultTheme))) {
                      echo '<option value="' . $themeName . '" selected="selected">' . htmlspecialchars($themeName) . '</option>';
                  } else {
                      echo '<option value="' . $themeName . '">' . htmlspecialchars($themeName) . '</option>';
                  }
              }
             ?>
        	</select>
        </td>
        </tr>
         
        <tr valign="top">
        <th scope="row">iPad Theme</th>
        <td>
        	<select name="ipad_theme">
			 <?php 
              foreach ($themeNames as $themeName) {              
                  if (($ipadTheme == $themeName) || (($ipadTheme == '') && ($themeName == $defaultTheme))) {
                      echo '<option value="' . $themeName . '" selected="selected">' . htmlspecialchars($themeName) . '</option>';
                  } else {
                      echo'<option value="' . $themeName . '">' . htmlspecialchars($themeName) . '</option>';
                  }
              }
             ?>
        	</select>
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Android Theme</th>
        <td>
        	<select name="android_theme">
			 <?php 
              foreach ($themeNames as $themeName) {              
                  if (($androidTheme == $themeName) || (($androidTheme == '') && ($themeName == $defaultTheme))) {
                      echo '<option value="' . $themeName . '" selected="selected">' . htmlspecialchars($themeName) . '</option>';
                  } else {
                      echo'<option value="' . $themeName . '">' . htmlspecialchars($themeName) . '</option>';
                  }
              }
             ?>
        	</select>
        </td>
        </tr>
		
        <tr valign="top">
        <th scope="row">Android Tablet Theme</th>
        <td>
        	<select name="android_tab_theme">
			 <?php 
              foreach ($themeNames as $themeName) {              
                  if (($androidTabTheme == $themeName) || (($androidTabTheme == '') && ($themeName == $defaultTheme))) {
                      echo '<option value="' . $themeName . '" selected="selected">' . htmlspecialchars($themeName) . '</option>';
                  } else {
                      echo'<option value="' . $themeName . '">' . htmlspecialchars($themeName) . '</option>';
                  }
              }
             ?>
        	</select>
        </td>
        </tr>
		<tr valign="top">
        <th scope="row">&nbsp;</th>
        <td>
        	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </td>
        </tr>
    </table>
    <br/>    
</td></tr></tbody></table>
<br/>