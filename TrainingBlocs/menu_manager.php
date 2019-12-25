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
		 <li> <a href="#"> Perfomance Management </a> 
			 <ul> 
			 	<li><a href="#">Building My MSC Objectives</a>
			 		<UL>
			 			<li><a href="./msc_objective.php">Building My Annual MSC Objectives</a></li>
			 			<li><a href="#">Building My Annual MSC Objectives</a></li>
			 			<li><a href="#">Building My Annual MSC Objectives</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Rating Performance</a>
			 		<UL>
			 			<li><a href="#">Rating My Performances</a>
			 				<ul>
			 					<li><a href="#">Rating My Monthly Performance</a>
			 					<li><a href="#">Rating My Annual Performance</a>
			 				</ul>
			 			</li>
			 		</UL>
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
		 <li> <a href="#"> Perfomance Management </a> 
			 <ul> 
			 	<li><a href="#">Building My MSC Objectives</a>
			 		<UL>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_annual">Building My Annual MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_monthly">Building My Monthly MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_personal_development">Building My Personal Deveopment Plan</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Rating Performance</a>
			 		<UL>
			 			<li><a href="#">Rating My Performances</a>
			 				<ul>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_monthly">Rating My Monthly Performance</a>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_annual">Rating My Annual Performance</a>
			 				</ul>
			 			</li>
			 		</UL>
			 	</li>
			 	<li> <a href="#"> Perfomance Management </a> 
			 		<ul> 
					 	<li><a href="#">Managing My Performances</a>
							<ul>
							 	<li><a href="#">My Monthly Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report</a>
							 	<li><a href="#">My Annual Performance Report</a>
							 	<li><a href="#">My Multi-Annual Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report - Filter by Levels</a>
							 	<li><a href="#">My Multi-Annual Performance Report - Filter by Levels</a>
							</ul>
						</li>
					</ul>
				</li>
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
		 <li> <a href="#"> Perfomance Management </a> 
			 <ul> 
			 	<li><a href="#">Building My MSC Objectives</a>
			 		<UL>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_annual">Building My Annual MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_monthly">Building My Monthly MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_personal_development">Building My Personal Deveopment Plan</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Approving My Employees MSC Objectives</a>
			 		<UL>
			 			<li><a href="./approve_msc_objective.php?p=approve_annual_msc&s=approval">Approving My Employees Annual MSC Objectives</a></li>
			 			<li><a href="./approve_msc_objective.php?p=approve_monthly_msc&s=approval">Approving My Employees Monthly MSC Objectives</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Rating Performance</a>
			 		<UL>
			 			<li><a href="#">Rating My Performances</a>
			 				<ul>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_monthly">Rating My Monthly Performance</a>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_annual">Rating My Annual Performance</a>
			 				</ul>
			 			</li>
			 			<li><a href="#">Approving My Employees Performances</a>
			 				<ul>
			 					<li><a href="#">Approving My Employees Annual Performance</a>
			 					<li><a href="#">Approving My Employees Monthly Performance</a>
			 				</ul>
			 			</li>
			 		</UL>
			 	</li>
			 	<li> <a href="#"> Perfomance Management </a> 
			 		<ul> 
					 	<li><a href="#">Managing Employees Performances</a>
							<ul>
							 	<li><a href="#">Employees Monthly Performance Report</a>
							 	<li><a href="#">Employees Multi-Monthly Performance Report</a>
							 	<li><a href="#">Employees Annual Performance Report</a>
							 	<li><a href="#">Employees Multi-Anual Performance Report</a>
							 	<li><a href="#">Employees Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Employees Annual Performance Report - Filter by Level</a>
							</ul>
						</li>
						<li><a href="#">Managing My Performances</a>
							<ul>
							 	<li><a href="#">My Monthly Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report</a>
							 	<li><a href="#">My Annual Performance Report</a>
							 	<li><a href="#">My Multi-Annual Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report - Filter by Levels</a>
							 	<li><a href="#">My Multi-Annual Performance Report - Filter by Levels</a>
							</ul>
						</li>
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
		 <li> <a href="#"> Perfomance Management </a> 
			 <ul> 
			 	<li><a href="#">Building My MSC Objectives</a>
			 		<UL>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_annual">Building My Annual MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_monthly">Building My Monthly MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_personal_development">Building My Personal Deveopment Plan</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Approving My Employees MSC Objectives</a>
			 		<UL>
			 			<li><a href="./approve_msc_objective.php?p=approve_annual_msc&s=approval">Approving My Employees Annual MSC Objectives</a></li>
			 			<li><a href="./approve_msc_objective.php?p=approve_monthly_msc&s=approval">Approving My Employees Monthly MSC Objectives</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Rating Performance</a>
			 		<UL>
			 			<li><a href="#">Rating My Performances</a>
			 				<ul>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_monthly">Rating My Monthly Performance</a>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_annual">Rating My Annual Performance</a>
			 				</ul>
			 			</li>
			 			<li><a href="#">Approving My Employees Performances</a>
			 				<ul>
			 					<li><a href="#">Approving My Employees Annual Performance</a>
			 					<li><a href="#">Approving My Employees Monthly Performance</a>
			 				</ul>
			 			</li>
			 		</UL>
			 	</li>
			 	<li> <a href="#"> Perfomance Management </a> 
			 		<ul> 
			 			<li><a href="#">Managing Department Performances</a>
							<ul>
							 	<li><a href="#">Department Monthly Performance Report</a>
							 	<li><a href="#">Department Multi-Monthly Performance Report</a>
							 	<li><a href="#">Department Annual Performance Report</a>
							 	<li><a href="#">Department Multi-Annual Performance Report</a>
							 	<li><a href="#">Department Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Department Annual Performance Report - Filter by Level</a>
							 	<li><a href="#">Department Multi-Annual Performance  Report - Filter by Level</a>
							</ul>
						</li>
					 	<li><a href="#">Managing Employees Performances</a>
							<ul>
							 	<li><a href="#">Employees Monthly Performance Report</a>
							 	<li><a href="#">Employees Multi-Monthly Performance Report</a>
							 	<li><a href="#">Employees Annual Performance Report</a>
							 	<li><a href="#">Employees Multi-Anual Performance Report</a>
							 	<li><a href="#">Employees Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Employees Annual Performance Report - Filter by Level</a>
							</ul>
						</li>
						<li><a href="#">Managing My Performances</a>
							<ul>
							 	<li><a href="#">My Monthly Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report</a>
							 	<li><a href="#">My Annual Performance Report</a>
							 	<li><a href="#">My Multi-Annual Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report - Filter by Levels</a>
							 	<li><a href="#">My Multi-Annual Performance Report - Filter by Levels</a>
							</ul>
						</li>
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
		 <li> <a href="#"> Perfomance Management </a> 
			 <ul> 
			 	<li><a href="#">Building My MSC Objectives</a>
			 		<UL>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_annual">Building My Annual MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_monthly">Building My Monthly MSC Objectives</a></li>
			 			<li><a href="./msc_objective.php?p=msc_objecctive_personal_development">Building My Personal Deveopment Plan</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Approving My Employees MSC Objectives</a>
			 		<UL>
			 			<li><a href="./approve_msc_objective.php?p=approve_annual_msc&s=approval">Approving My Employees Annual MSC Objectives</a></li>
			 			<li><a href="./approve_msc_objective.php?p=approve_monthly_msc&s=approval">Approving My Employees Monthly MSC Objectives</a></li>
			 		</UL>
			 	</li>
			 	<li><a href="#">Rating Performance</a>
			 		<UL>
			 			<li><a href="#">Rating My Performances</a>
			 				<ul>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_monthly">Rating My Monthly Performance</a>
			 					<li><a href="./rating_perfomance.php?p=rating_perfomance_annual">Rating My Annual Performance</a>
			 				</ul>
			 			</li>
			 			<li><a href="#">Approving My Employees Performances</a>
			 				<ul>
			 					<li><a href="./rating_perfomance.php?p=approve_rating_perfomance_annual&s=approval">Approving My Employees Annual Performance</a>
			 					<li><a href="./rating_perfomance.php?p=approve_rating_perfomance_monthly&s=approval">Approving My Employees Monthly Performance</a>
			 				</ul>
			 			</li>
			 		</UL>
			 	</li>
			 	<li> <a href="#"> Perfomance Management </a> 
			 		<ul> 
			 			<li><a href="#">Managing Company Performances</a>
							<ul>
							 	<li><a href="#">Company Monthly Performance Report</a>
							 	<li><a href="#">Company Multi-Monthly Performance Report</a>
							 	<li><a href="#">Company Annual Performance Report</a>
							 	<li><a href="#">Company Multi-Annual Performance Report</a>
							 	<li><a href="#">Company Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Company Annual Performance Report - Filter by Level</a>
							 	<li><a href="#">Company Multi-Annual Performance  Report - Filter by Level</a>
							</ul>
						</li>
			 			<li><a href="#">Managing Department Performances</a>
							<ul>
							 	<li><a href="#">Department Monthly Performance Report</a>
							 	<li><a href="#">Department Multi-Monthly Performance Report</a>
							 	<li><a href="#">Department Annual Performance Report</a>
							 	<li><a href="#">Department Multi-Annual Performance Report</a>
							 	<li><a href="#">Department Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Department Annual Performance Report - Filter by Level</a>
							 	<li><a href="#">Department Multi-Annual Performance  Report - Filter by Level</a>
							</ul>
						</li>
					 	<li><a href="#">Managing Employees Performances</a>
							<ul>
							 	<li><a href="#">Employees Monthly Performance Report</a>
							 	<li><a href="#">Employees Multi-Monthly Performance Report</a>
							 	<li><a href="#">Employees Annual Performance Report</a>
							 	<li><a href="#">Employees Multi-Anual Performance Report</a>
							 	<li><a href="#">Employees Monthly Performance Report - Filter by Level</a>
							 	<li><a href="#">Employees Annual Performance Report - Filter by Level</a>
							</ul>
						</li>
						<li><a href="#">Managing My Performances</a>
							<ul>
							 	<li><a href="#">My Monthly Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report</a>
							 	<li><a href="#">My Annual Performance Report</a>
							 	<li><a href="#">My Multi-Annual Performance Report</a>
							 	<li><a href="#">My Multi-Month Performance Report - Filter by Levels</a>
							 	<li><a href="#">My Multi-Annual Performance Report - Filter by Levels</a>
							</ul>
						</li>
					</ul>
				</li>
			 </ul>
		 </li>
		 ';
}

?> 