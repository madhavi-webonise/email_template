/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.addTemplates('default',{
    imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath('templates')+'templates/images/'),
    templates:[{
        title:'High Speed Internet',
        image:'template1.jpg',
        description:'A title with some text and a table.',
        html:'<div class="contentInner">   <div class="details"> <div class="tittle"> Title:Lorem ipsum dolor sit amet</div> <div class="text"> <p> Pellentesque fermentum, purus sed sagittis accumsan, neque sapien porttitor sapien, eu mollis ante leo ac erat. Donec id ligula non lectus lobortis pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lorem tortor, sagittis et accumsan congue,</p> <p> convallis sed arcu. Nulla fermentum tortor ut nisl facilisis mattis. Sed mattis scelerisque odio. Phasellus aliquet orci magna, pellentesque fringilla lorem.</p> </div> </div> <div class="displayBox corners"> <img src="images/leadCapture.jpg" alt=""></div>  <div class="rightSmall"> <div class="leadCapture"> <form> <ul> <li> <label>Name </label> <input type="text" value="" class="field"></li> <li> <label>Email </label> <input type="text" value="" class="field"></li> <li> <label>Phone </label> <input type="text" value="" class="field"></li> <li> <label>Pond Size </label> <select><option>100</option><option>200</option><option>300</option><option>400</option><option>500</option></select></li> <li> <label>Biggest Pond Challenge </label> <select><option>select 1</option><option>select 2</option><option>select 3</option><option>select 4</option><option>select 5</option></select></li> <li> <input type="submit" value="Submit" class="submit"> <input type="button" value="Cancel" class="cancel"></li> </ul> </form> </div> </div> <div class="clearfix"> &nbsp;</div>  <div class="clearfix"></div> <div class="clearfix"></div> </div>'
    }]
});
