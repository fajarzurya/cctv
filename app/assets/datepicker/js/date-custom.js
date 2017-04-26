// JavaScript Document
$(function() {
			$("#datepicker").datepicker();
			$("#format").change(function() { $('#datepicker').datepicker('option', {dateFormat: $(this).val()}); });
		});
		$(function() {
			$("#datepicker2").datepicker();
			$("#format").change(function() { $('#datepicker2').datepicker('option', {dateFormat: $(this).val()}); });
		});
		$(function() {
			$("#datepicker4").datepicker();
			$("#format").change(function() { $('#datepicker2').datepicker('option', {dateFormat: $(this).val()}); });
		});
		$(function() {
			$("#datepicker2").datepicker();
			$("#format").change(function() { $('#datepicker2').datepicker('option', {dateFormat: $(this).val()}); });
		});