<h1>My Accounts Page</h1>

<div class="container myaccount">
    <div class="row intro col-12">
        <h2>Hey Vijay,</h2>
        <p>How are you today?</p>
        <p>Smart move! You’ve just made a difference to your professional life while earning some money.</p>
    </div>
    <div class="row">
        <!--<form class="form-horizontal">-->
		<?php echo CHtml::beginForm('','post',array('class' => 'form-horizontal')); ?>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="Learn['name'] placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Designation</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword3" name="Learn['designation']  placeholder="Designation">
                </div>
            </div>
            <div class="form-group">
                <label for="inputCompany" class="col-sm-2 control-label">Company</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputCompany" name="Learn['company'] placeholder="Company">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Total Exp</label>
                <div class="col-sm-8">
                    <select class="form-control" name="Learn['exp'] >
                        <option value="-1">Select Exp</option>
                        <option value="1">1 Years</option>
                        <option value="2">1 Years</option>
                        <option value="3">&gt;&equiv;3 Years</option>
                        <option value="4">&gt;&equiv;4 Years</option>
                        <option value="5">&gt;&equiv;5 Years</option>
                        <option value="6">&gt;&equiv;6 Years</option>
                        <option value="7">&gt;&equiv;7 Years</option>
                        <option value="8">&gt;&equiv;8 Years</option>
                        <option value="9">&gt;&equiv;9 Years</option>
                        <option value="10">&gt;&equiv;10 Years</option>
                        <option value="11">&gt;&equiv;11 Years</option>
                        <option value="12">&gt;&equiv;12 Years</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Skills</label>
                <div class="col-sm-8">
                    <select id="example-getting-started" name="Learn['skills']  multiple="multiple" display="none">
                        <option value="1">C++</option>
                        <option value="2">Unix</option>
                        <option value="3">PHP</option>
                        <option value="4">C#</option>
                        <option value="5">ASP.Net</option>
                        <option value="6">MySQL</option>
                        <option value="7">plsql</option>
                        <option value="8">Java</option>
                        <option value="9">Javascript</option>
                        <option value="10">Html</option>
                        <option value="11">CSS</option>
                        <option value="12">Bootstrap</option>
                    </select>
                    <div class="btn-group">
                        <ul class="multiselect-container dropdown-menu">
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="cheese">Cheese</label>
                                </a>
                            </li>
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="tomatoes">Tomatoes</label>
                                </a>
                            </li>
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="Mozzarella">Mozzarella</label>
                                </a>
                            </li>
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="Mushrooms">Mushrooms</label>
                                </a>
                            </li>
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="Pepperoni">Pepperoni</label>
                                </a>
                            </li>
                            <li class="active">
                                <a tabindex="0">
                                    <label class="checkbox">
                                        <input type="checkbox" value="Onions">Onions</label>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
					<input type="hidden" name="Learn['submit']" value="submit"/>
                    <button type="submit" class="btn btn-default">Signup as Trainer</button>
                </div>
            </div>
		
	
        <!--</form>-->		 
		<?php echo CHtml::endForm(); ?>
		
    </div>

</div>


