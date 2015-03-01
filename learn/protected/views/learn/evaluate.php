<div class="container">

    <div class="row intro col-12">
        <h2>Hey Vijay,</h2>
        <p>You are just one step away from becoming the most awesome trainer</p>
    </div>
    <!--</form>-->
    <?php echo CHtml::beginForm( 'index.php?r=learn/result', 'post',array( 'class'=>'form-horizontal')); ?>
    <div class="form-group">

        <label for="exampleInputEmail1">1. Theoretical question</label>
        <div class="radiogroup">
            <label class="radio-inline">
                <input type="radio" class="" name="Learn['inlineRadioOptions']" id="inlineRadio1" value="1" />A
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions']" id="inlineRadio2" value="0" />B
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions']" id="inlineRadio3" value="0" />C
            </label>

            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions']" id="inlineRadio4" value="0" />D
            </label>
        </div>

    </div>

    <div class="form-group">

        <label for="exampleInputEmail1">2. Theoretical question</label>
        <div class="radiogroup">

            <label class="radio-inline">
                <input type="radio" class="" name="Learn['inlineRadioOptions_2']" id="inlineRadio1" value="1" />A
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_2']" id="inlineRadio2" value="0" />B
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_2']" id="inlineRadio3" value="0" />C
            </label>

            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_2']" id="inlineRadio4" value="0" />D
            </label>
        </div>
    </div>

    <div class="form-group">

        <label for="exampleInputEmail1">3. Theoretical question</label>
        <div class="radiogroup">

            <label class="radio-inline">
                <input type="radio" class="" name="Learn['inlineRadioOptions_3']" id="inlineRadio1" value="1" />A
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_3']" id="inlineRadio2" value="0" />B
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_3']" id="inlineRadio3" value="0" />C
            </label>

            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_3']" id="inlineRadio4" value="0" />D
            </label>
        </div>
    </div>


    <div class="form-group">

        <label for="exampleInputEmail1">4. Theoretical question</label>
        <div class="radiogroup">

            <label class="radio-inline">
                <input type="radio" class="" name="Learn['inlineRadioOptions_4']" id="inlineRadio1" value="1" />A
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_4']" id="inlineRadio2" value="0" />B
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_4']" id="inlineRadio3" value="0" />C
            </label>

            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_4']" id="inlineRadio4" value="0" />D
            </label>
        </div>
    </div>


    <div class="form-group">

        <label for="exampleInputEmail1">5. Theoretical question</label>
        <div class="radiogroup">
            <label class="radio-inline">
                <input type="radio" class="" name="Learn['inlineRadioOptions_5']" id="inlineRadio1" value="1" />A
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_5']" id="inlineRadio2" value="0" />B
            </label>
            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_5']" id="inlineRadio3" value="0" />C
            </label>

            <label class="radio-inline">
                <input type="radio" name="Learn['inlineRadioOptions_5']" id="inlineRadio4" value="0" />D
            </label>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <input type="hidden" name="Learn['submit']" value="submit" />
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    <!--</form>-->
    <?php echo CHtml::endForm(); ?>
</div>
