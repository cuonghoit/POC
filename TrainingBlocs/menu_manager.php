<?php

function getActualMenu(){
	echo' 
		<li><a href="./training.php">Training Management</a>
		  <ul>
		  <li><a href="./training.php?p=<?php echo Signal::$PAGE_INDIVIDUAL ?>">Individual Training</a></li>
		  <li><a href="./training.php?p=<?php echo Signal::$PAGE_GROUP ?>">Group Training</a></li>
		  <li><a href="./training.php?p=<?php echo Signal::$PAGE_DEPARTMENT ?>">Department Training</a></li>
		  <li><a href="./training.php?p=<?php echo Signal::$PAGE_COMPANY ?>">Company Training</a></li>
		  <li><a href="./training.php?p=<?php echo Signal::$PAGE_COMPANY ?>">Approve Training</a>
			  <ul>
				  <li><a href="./training.php?p=<?php echo Signal::$PAGE_INDIVIDUAL ?>&s=<?php echo Signal::$SIGNAL_APPROVAL ?>">Approve Individual Training Plan</a></li>
				  <li><a href="./training.php?p=<?php echo Signal::$PAGE_GROUP ?>&s=<?php echo Signal::$SIGNAL_APPROVAL ?>">Approve Group Training Plan</a></li>
				  <li><a href="./training.php?p=<?php echo Signal::$PAGE_DEPARTMENT ?>&s=<?php echo Signal::$SIGNAL_APPROVAL ?>">Approve Department Training Plan</a></li>
				  <li><a href="./training.php?p=<?php echo Signal::$PAGE_COMPANY ?>&s=<?php echo Signal::$SIGNAL_APPROVAL ?>">Approve Company Training Plan</a></li>
			  </ul>
		  </li>
		  </ul>
		 </li>
		 ';
}

function getEmployeeMenu() {
	echo' 
		<li><a href="./training.php">Training Management</a>
		  <ul>
		  <li><a href="./training.php?p=individual">Individual Training</a></li>
		  </ul>
		 </li>
		 ';
}

function getGroupLeadMenu() {
	echo' 
		<li><a href="./training.php">Training Management</a>
		  <ul>
		  <li><a href="./training.php?p=individual">Individual Training</a></li>
		  <li><a href="./training.php?p=group">Group Training</a></li>
		  <li><a href="./training.php?p=company">Approve Training</a>
			  <ul>
			      <li><a href="./training.php?p=individual&s=approval">Approve Individual Training Plan</a></li>
			  </ul>
		  </li>
		  </ul>
		 </li>
		 ';
}

function getDepartmentManagerMenu() {
	echo' 
		<li><a href="./training.php">Training Management</a>
		  <ul>
		  <li><a href="./training.php?p=individual">Individual Training</a></li>
		  <li><a href="./training.php?p=department">Department Training</a></li>
		  <li><a href="./training.php?p=company">Approve Training</a>
			  <ul>
			      <li><a href="./training.php?p=group&s=approval">Approve Group Training Plan</a></li>
				  <li><a href="./training.php?p=department&s=approval">Approve Department Training Plan</a></li>
			  </ul>
		  </li>
		  </ul>
		 </li>
		 ';
}

function getBODMenu() {
	echo' 
		<li><a href="./training.php">Training Management</a>
		  <ul>
		  <li><a href="./training.php?p=individual">Individual Training</a></li>
		  <li><a href="./training.php?p=company">Company Training</a></li>
		  <li><a href="./training.php?p=company">Approve Training</a>
			  <ul>
				  <li><a href="./training.php?p=company&s=approval">Approve Company Training Plan</a></li>
			  </ul>
		  </li>
		  </ul>
		 </li>
		 ';
}

?> 