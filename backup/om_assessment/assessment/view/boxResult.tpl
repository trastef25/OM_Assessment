 
            <h4>General Results</h4>
               </br> 
               <label class="pull-left marginleft"  class="pull-left">Overall Rating: </label>  
                <input type="text" name="overall_Rating" value="Overall Rating" readonly>
               <label  class="pull-left marginleft" class="pull-left">Overall Score: </label>  
                <input type="text" name="overall_Score" value="Overall Score" readonly>
             
                <h4>Categories</h4> 
                </br> 
                {section name=cT loop=$categoryType}
                  <label  id="{$categoryType[cT].mat_cat_name}"class="pull-left">{$categoryType[cT].mat_cat_name}</label> 
                  <input class="pull-right marginleft" type="text" name="lbl_{$categoryType[cT].mat_cat_name}" value="{$focusStatus}" readonly> 
                {/section}
 