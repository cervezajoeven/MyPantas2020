		
		elseif ($mtype=='pr')
			echo "<tr>
				<td align='center' width='3'>$num_rows  $desc</td>	
				<td class='opac' width='75%' valign='top'><a href='$link=$bkid'> <b>$TitleStr[1]</b></a>";
					if ($TitleStr[2] <> "")
						echo "<br>$TitleStr[2]<br>$TitleStr[3]<br>$locator
						<br>
						<ol>
						<li><a href='$link=$bkid'><b>Details</b></a>
							&nbsp&nbsp&nbspEmail
							&nbsp&nbsp&nbspExport
							&nbsp&nbsp&nbspSave</li>
						</ol>
						</td>";
					else{
						echo "<br>$TitleStr[3]<br>$locator
						<ol>
						<li><a href='$link=$bkid'><b>Details</b></a>
							&nbsp&nbsp&nbspEmail
							&nbsp&nbsp&nbspExport
							&nbsp&nbsp&nbspSave</li>
						</ol>						
						</td>";
					}
				echo "<td align='center' width='3'>$copy</td>
			 </tr>";