<?php

//author: qCazelles

class Question extends SqlElement {
	
	public $id;
	public $idTheme;			//Reference to a Theme (int)
	public $author;				//Reference to a Teacher
	public $answers;			//Array of Answers
	
	
}