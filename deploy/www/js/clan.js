function leave_clan()
{
	if (confirm("Do you really want to exit the clan?"))
	{
		window.location = "clan.php?command=leave";
	}

	return false;
}
