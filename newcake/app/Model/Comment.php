<?php
class Comment extends AppModel {
	var $name = 'Comment';
	var $belongsTo = array('Post'=>array('className'=>'Post'));
	
	 public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}