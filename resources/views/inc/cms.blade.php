<small>Div Width ( 1 - 12 ): </small>
<input class="div_size" id="dw" name="dw" type="text" size="5" maxlength="2" value="{{$c->divsize}}" required>&nbsp;&nbsp;
<small>Div Height (in pixels): </small>
<input class="div_height" id="dh" name="dh" type="text" size="5" maxlength="4" value="{{$c->divheight}}" required>px<br><br>
<div id="cnt_{{$c->id}}" style="padding: 10px; border: 1px solid #ddd; background: #fff;" contenteditable><?php echo '<p>'.html_entity_decode($c->content).'</p>'; ?></div>
<hr>
<button onclick="saveToDB()" class="btn btn-info">
    <i class="fa fa-save fa-lg"></i> Save Area {{$c->id}}
</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><small><b>Click anywhere in the box above to edit the content - Use HTML tags to format text</b></small></span>