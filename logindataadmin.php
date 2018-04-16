
<script language="javascript">
function report(url)
{
	window.navigate(url);
}

</script>
</head>
<body align="center" >
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body background="1.jpg" style="background-repeat:no-repeat; background-size:120%">
<form>
<center><br/>
<h1 style="color:cyan;">ACTIVITIES TO BE DONE</h1> <br/>

<table align="left" cellpadding="50">
<tr>
<td >
<input type="button" value="               Add Faculty        " onclick="location.href = 'facultyreg.php'";><br><br>
<input type="button" value="               Remove Faculty        " onclick="location.href ='deletfactfrm.html'"><br><br>
<input type="button" value="               Add Student        " onclick="location.href = 'studentreg.php'";><br><br>
<input type="button" value="               Remove Student        " onclick="location.href = 'deletstuform.html'"><br><br>
<input type="button" value="               View Student Attendance        " onclick="location.href = 'commonatt.php'";><br><br>
<input type="button" value="               View Faculty Attendance        " onclick="location.href = 'viewfacultyatt.php'";><br><br>
<input type="button" value="               Insert/Update no. of working days" onclick="location.href = 'workform.html'"><br><br>
<input type="button" value="               Log out                                            " onclick="location.href = 'signout.html'";>
</td>

</table>
</center>
</form>

<div id="sidebar">
					<ul>
						<li id="calendar">
				<h1 align="right" style="color:cyan;">Calendar</h1>
				<div id="calendar_wrap">
					<table summary="Calendar" align="right" style="color:cyan;">
						<caption>
						FEBRUARY 2017
						</caption>
						<thead>
							<tr>
								<th abbr="Monday" scope="col" title="Monday">M</th>&nbsp;&nbsp;&nbsp;
								<th abbr="Tuesday" scope="col" title="Tuesday">T</th>&nbsp;&nbsp;&nbsp;
								<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
								<th abbr="Thursday" scope="col" title="Thursday">T</th>
								<th abbr="Friday" scope="col" title="Friday">F</th>
								<th abbr="Saturday" scope="col" title="Saturday">S</th>
								<th abbr="Sunday" scope="col" title="Sunday">S</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td abbr="October" colspan="3" id="prev"><a href="#" title="View posts for October 2010">&laquo; Feb</a></td>
								<td class="pad">&nbsp;</td>
								<td abbr="December" colspan="3" id="next"><a href="3" title="View posts for October 2010">Apr &raquo;</a></td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td colspan="3" class="pad">&nbsp;</td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
							</tr>
							<tr>
								<td>5</td>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
								<td>10</td>
								<td>11</td>
							</tr>
							<tr>
								<td>12</td>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
								<td>17</td>
								<td>18</td>
							</tr>
							<tr>
								<td>19</td>
								<td>20</td>
								<td>21</td>
								<td>22</td>
								<td>23</td>
								<td id="today">24</td>
								<td>25</td>
							</tr>
							<tr>
								<td>26</td>
								<td>27</td>
								<td><a href="#">28</a></td>
								<td>29</td>
								<td>30</td>
								<td class="pad" colspan="2">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>

</body>
</html>