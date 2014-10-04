<?php
/** @var $this PassionController */
?>
<div class="MainContainer">
    <div class="PostPassionLeft">
        <input name="" type="text" placeholder="Add your Passion" />
        <div class="Participate">To Participate in the community <a id="add_tags" href="#" data-toggle="modal"
            data-target="#tag-cloud-modal">Add Tags</a> here</div>
        <div id="added-tags"></div>

        <div class="PassionList">
            <div class="PassionListScrollPannel">
                <div class="PassionListTable">
                    <div class="PassionListTableRow">
                        <div class="PassionListTableCell">
                            Lorem Ipsum is simply dummy text typesetting industry.
                        </div>
                    </div>
                    <div class="PassionListTableRow">
                        <div class="PassionListTableCell">
                            Lorem Ipsum is simply dummy text typesetting industry. Lorem Ipsum is simply
                        </div>
                    </div>
                    <div class="PassionListTableRow">
                        <div class="PassionListTableCell">
                            Lorem Ipsum is simply dummy text typesetting industry. Lorem Ipsum is simply dummy text
                        </div>
                    </div>
                    <div class="PassionListTableRow">
                        <div class="PassionListTableCell">
                            Lorem Ipsum is simply dummy text typesetting industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="PostPassionRight">
        <div class="AlertsBox">
            <div class="Head">Alerts</div>
            <div class="AlertsScrollPannel">
                <div class="AlertsBoxTable">
                    <div class="AlertsBoxTableRow">
                        <div class="AlertsBoxTableCell">
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>

                    <div class="AlertsBoxTableRow">
                        <div class="AlertsBoxTableCell">
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>
                    <div class="AlertsBoxTableRow">
                        <div class="AlertsBoxTableCell">
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>

                    <div class="AlertsBoxTableRow">
                        <div class="AlertsBoxTableCell">
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="AcheivementsBox">
            <div class="Head">Other Acheivements</div>
            <div class="AcheivementsScrollPannel">
                <div class="AcheivementsBoxTable">
                    <div class="AcheivementsBoxTableRow">
                        <div class="AcheivementsBoxTableCell">
                            <img src="../images/AcheivementsImg1.png" />
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>

                    <div class="AcheivementsBoxTableRow">
                        <div class="AcheivementsBoxTableCell">
                            <img src="../images/AcheivementsImg2.png" />
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>

                    <div class="AcheivementsBoxTableRow">
                        <div class="AcheivementsBoxTableCell">
                            <img src="../images/AcheivementsImg3.png" />
                            Lorem Ipsum is simply dummy text of the printing and
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'tag-cloud-modal')); ?>
<?php
/*foreach($tags_global as $k=>$v) {
    $typeAheadSource[]  = $v->global_tag_name;
}
*/?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Add Tags</h4>
<!--    --><?php /*$this->widget('bootstrap.widgets.TbTypeahead', array(
        'name'=>'typeahead',
        'options'=>array(
            'source'=>$typeAheadSource,
            'items'=>4,
        ),
    )); */?>
</div>

<div class="modal-body">
         <ul>
        <?php
        foreach($tags_global as $k=>$v){
            ?>
            <li><a href="#<?php echo $v->global_tag_name;?>" class="tags"
                   data-id="<?php echo $v->id;?>"><?php echo $v->global_tag_name;?></a></li>
        <?php
        }
        ?>
        </ul>
</div>

<div class="modal-footer">
    <div id="selected-tags"></div>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Add Tags',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal', 'id'=>'add-tag-button'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>

<?php $this->endWidget(); ?>
<script type="text/javascript">
    $(document).ready(function(){

        var tag_list = {tags:[]};

        //Check if already have the tag list set if yes, load the tag list else provide a new blank.
        $(document).on('click', '#add_tags', function() {
            $('#selected-tags').empty();
            $.each(tag_list.tags, function(key, value) {
                $('#selected-tags').append('<span class="tag-pill">' +
                '<span id="' + value.id +'" class="tag-item">' + value.name + '</span>' +
                '<span id="remove_id' + value.id + '" class="value">' + value.name + '</span>' +
                '<span class="close">&times;</span></span>');

            });

        });


        $(document).on('click', '.tags', function(){
            $(this).css("color", '#ff0000');
            //Check if span is already append to div then remove it and change style back
            //Remove the tag from tag_list too.
            if($('#'+$(this).data('id')).length > 0){
                //Item Exits, Remove from the selected-tags
                $('#'+$(this).data('id')).parent().remove();
                $(this).css("color", '#0088cc');
                //Remove from tag list too
                var itemToRemove = $(this).text();
                removeItemFromTagList(itemToRemove);

            }
            else {
                var tag_name = $(this).text();
                var tag_id = $(this).data('id');
                tag_list.tags.push({"id":tag_id, "name":tag_name});

                $('#selected-tags').append('<span class="tag-pill">' +
                '<span id="' + $(this).data('id') +'" class="tag-item">' + $(this).text() + '</span>' +
                '<span id="remove_id' + $(this).data("id") + '" class="value">' + $(this).text() + '</span>' +
                '<span class="close">&times;</span></span>');



        }
        });

        //console.log(tag_list);
        $(document).on('click', '.close', function(){
            //Remove tag from the tag_list also
            var itemToRemove = $(this).prev().text();
            removeItemFromTagList(itemToRemove);

          //console.log($(this).prev().text());
            $('.tags:contains("' + $(this).prev().text() +'")').css('color', '#0088cc');
            $(this).parent().remove();


        });

        $('#add-tag-button').on('click', $(this), function(){
            $('#added-tags').empty();
            $.each(tag_list.tags, function(key, value) {
               //console.log("Key:" +  key + "ValueID:" + value.id + "ValueName:" + value.name);
                $('#added-tags').append('<span class="tag-pill">' +
                    '<span class="tag-item">' + value.name + '</span>' +
                    '<span id="remove_added_id' + value.id + '" class="value">' + value.name + '</span>' +
                    '<span class="close">&times;</span></span>'

                );
            });

        });

        function removeItemFromTagList(itemToRemove){

           //console.log(itemToRemove);
            var result = $.grep(tag_list.tags, function(e){ return e.name != itemToRemove; });
            //console.log(result);
            tag_list['tags']  = result;
            console.log(tag_list);
            return tag_list;

        }
    });
</script>