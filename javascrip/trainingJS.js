
		window.onload = function(){
			if (sessionStorage.getItem("training_table_value") !== null) {
				var TableValue = JSON.parse(sessionStorage.getItem("training_table_value"));
				$('#data_table tr').each(function(row, tr){
					row = row - 2;
					if(row < TableValue.length && row >= 0) {
						$(tr).find('td:eq(1)  select option:selected').text(TableValue[row]["name"]);
						$(tr).find('td:eq(2) input').val(TableValue[row]["disciplines"]);
						$(tr).find('td:eq(3) input').val(TableValue[row]["type"]);
						$(tr).find('td:eq(4) input').val(TableValue[row]["purpose"]);
						$(tr).find('td:eq(5) input').val(TableValue[row]["provider"]);
						$(tr).find('td:eq(6) input').val(TableValue[row]["location"]);
						$(tr).find('td:eq(7) input').val(TableValue[row]["usd"]);
						$(tr).find('td:eq(8) input').val(TableValue[row]["vnd"]);
						$(tr).find('td:eq(9) input').prop("checked", TableValue[row]["jan"]);
						$(tr).find('td:eq(10) input').prop("checked", TableValue[row]["feb"]);
						$(tr).find('td:eq(11) input').prop("checked", TableValue[row]["mar"]);
						$(tr).find('td:eq(12) input').prop("checked", TableValue[row]["apr"]);
						$(tr).find('td:eq(13) input').prop("checked", TableValue[row]["may"]);
						$(tr).find('td:eq(14) input').prop("checked", TableValue[row]["jun"]);
						$(tr).find('td:eq(15) input').prop("checked", TableValue[row]["jul"]);
						$(tr).find('td:eq(16) input').prop("checked", TableValue[row]["aug"]);
						$(tr).find('td:eq(17) input').prop("checked", TableValue[row]["sep"]);
						$(tr).find('td:eq(18) input').prop("checked", TableValue[row]["oct"]);
						$(tr).find('td:eq(19) input').prop("checked", TableValue[row]["nov"]);
						$(tr).find('td:eq(20) input').prop("checked", TableValue[row]["dec"]);
					}
				});
				
			}
		};
		
		function saveData(){
			var TableData = new Array();
			$('#data_table tr').each(function(row, tr){
				TableData[row] = {
					"name" 			: $(tr).find('td:eq(1) select option:selected').text(),
					"disciplines" 	: $(tr).find('td:eq(2) input').val(),
					"type" 			: $(tr).find('td:eq(3) input').val(),
					"purpose" 		: $(tr).find('td:eq(4) input').val(),
					"provider" 		: $(tr).find('td:eq(5) input').val(),
					"location" 		: $(tr).find('td:eq(6) input').val(),
					"usd" 			: $(tr).find('td:eq(7) input').val(),
					"vnd" 			: $(tr).find('td:eq(8) input').val(),
					"jan" 			: $(tr).find('td:eq(9) input').prop("checked"),
					"feb" 			: $(tr).find('td:eq(10) input').prop("checked"),
					"mar" 			: $(tr).find('td:eq(11) input').prop("checked"),
					"apr" 			: $(tr).find('td:eq(12) input').prop("checked"),
					"may" 			: $(tr).find('td:eq(13) input').prop("checked"),
					"jun" 			: $(tr).find('td:eq(14) input').prop("checked"),
					"jul" 			: $(tr).find('td:eq(15) input').prop("checked"),
					"aug" 			: $(tr).find('td:eq(16) input').prop("checked"),
					"sep" 			: $(tr).find('td:eq(17) input').prop("checked"),
					"oct" 			: $(tr).find('td:eq(18) input').prop("checked"),
					"nov" 			: $(tr).find('td:eq(19) input').prop("checked"),
					"dec" 			: $(tr).find('td:eq(20) input').prop("checked"),
				}
			}); 
			TableData.shift();
			TableData.shift();
			sessionStorage.setItem('training_table_value', JSON.stringify(TableData));
		};

		function test(){
			alert("PUMP");
		};

		function getApprovalTraining($approvalStatus) {
			var TheTable = new Array();
			$('#data_table_group_department tr').each(function(row, tr) {
				TheTable[row] = {
					"staffNumber" : $(tr).find('td:eq(2)').html(),
					"traingName" : $(tr).find('td:eq(3)').html(),
				}
			});
			TheTable.shift();
			TheTable.shift();
			$.post("Database/trainingServerSide.php", {trainingInfo: TheTable, status: $approvalStatus}, function(data) {
				
			});
		}

		function saveIndividualTraining($staffNumber){
			var TableData = new Array();
			$('#data_table tr').each(function(row, tr){
				TableData[row] = {
					"name" 			: $(tr).find('td:eq(1) select option:selected').text(),
					"disciplines" 	: $(tr).find('td:eq(2) input').val(),
					"type" 			: $(tr).find('td:eq(3) input').val(),
					"purpose" 		: $(tr).find('td:eq(4) input').val(),
					"provider" 		: $(tr).find('td:eq(5) input').val(),
					"location" 		: $(tr).find('td:eq(6) input').val(),
					"usd" 			: $(tr).find('td:eq(7) input').val(),
					"vnd" 			: $(tr).find('td:eq(8) input').val(),
					"jan" 			: $(tr).find('td:eq(9) input').prop("checked"),
					"feb" 			: $(tr).find('td:eq(10) input').prop("checked"),
					"mar" 			: $(tr).find('td:eq(11) input').prop("checked"),
					"apr" 			: $(tr).find('td:eq(12) input').prop("checked"),
					"may" 			: $(tr).find('td:eq(13) input').prop("checked"),
					"jun" 			: $(tr).find('td:eq(14) input').prop("checked"),
					"jul" 			: $(tr).find('td:eq(15) input').prop("checked"),
					"aug" 			: $(tr).find('td:eq(16) input').prop("checked"),
					"sep" 			: $(tr).find('td:eq(17) input').prop("checked"),
					"oct" 			: $(tr).find('td:eq(18) input').prop("checked"),
					"nov" 			: $(tr).find('td:eq(19) input').prop("checked"),
					"dec" 			: $(tr).find('td:eq(20) input').prop("checked"),
				}
			}); 
			TableData.shift();
			TableData.shift();
			$.post("Database/trainingServerSide.php", {trainingData: TableData, staffNumber: $staffNumber}, function(data) {
				sessionStorage.setItem('training_table_value', null);
			});
		};



