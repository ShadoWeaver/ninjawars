<?php
$alive      = false;
$private    = false;
$quickstat  = false;
$page_title = "FAQ";

include SERVER_ROOT."interface/header.php";
?>

<span class="brownHeading">Frequently Asked Questions</span><p>

<p>
  Welcome to a world that is not all it seems, be on your guard!
</p>

<p>
  The game is mainly one of fighting against other ninja.  Once you are a ninja, you can:
</p>

<p>
  <ul>
    <li>Kill townsfolk (click on the combat link, and then click the link for a thief, villager, or merchant, the easiest targets).</li>
    <li>
      Kill other ninja! (click on the "ninjas" link and go the last page, click a ninja, and then click "attack" to attack them)
      <div>use your skills or items to make more effective attacks.</div>
    </li>
    <li>If you die, just drag your ghost to the shrine and the monks will bring you back! (click on the "resurrect" link)</li>
  </ul>
</p>

<p>
  You can buy items to help your attack at the shop, but you'll need to work in the fields to get gold to buy stuff with.
</p>

<p>
  Once you get enough kills, you can level up at the dojo.
</p>

For more detail, read the faqs below, or see <a href="about.php">the "About" page</a> or <a href="http://ninjawars.pbwiki.com">the Wiki</a>.

<hr>

<span class="brownHeading">How do I level up ?</span><br>
By killing other Ninja.  Once you have enough kill points, you may increase your level by visiting the <a href="dojo.php">Dojo</a> in the village, which will make you do more damage and make your abilities stronger.<hr>

<span class="brownHeading">How do I attack another ninja?</span><br>
You can attack another ninja by selecting <a href="attack_player.php">combat</a> from the left menu then putting a ninja's name into the search, or viewing a <a href="list_all_players.php">list of ninjas</a> on the "player list", then click their name and attack them from their profile page.<hr>

<span class="brownHeading">I need turns, where can I get them?</span><br>
Wait and you will receive 2 Turns per hour automatically (3 for Blue Ninja), if you need more right now, buy speed scrolls in the <a href="shop.php">shop</a> and use them on yourself from your <a href="inventory.php">inventory</a>.<hr>

<span class="brownHeading">I need gold, where can I get it?</span><br>
You can get a percentage of gold from killing a Ninja(Players), NPCs, or Clicking on <a href="work.php">Work</a> in the Village, which will let you exchange turns for gold. Also, the <a href="doshin_office.php">Doshin Office</a> keeps a list of ninjas with bounties on their heads. Killing those ninja will get you the bounty as a reward.<hr>

<span class="brownHeading">How do I attack an NPC?</span><br>
Choose the <a href="attack_player.php">combat</a> link from the menu. Then click an NPC's link.  Most NPCs only give items and gold, not kill points.<hr>

<span class="brownHeading">How do I use items?</span><br>
There are two ways.  Either go to your own <a href="inventory.php">Inventory</a>, where you can use stealth scrolls and speed scrolls on yourself, or go to another ninja's page from the ninja list and then click on the item to use it on them.<hr>

<span class="brownHeading">How do I use my skills?</span><br>
Different Ninjas have different <a href="skills.php">skills</a> based on type(red, white, blue, and black).  Either click the skills link from the menu for any skills that you can use on yourself, or find an enemy ninja's profile page and click a skill to use it on them.<hr>

<span class="brownHeading">How do I join a clan ?</span><br>
Find a clan you want to join or a clanleader you want to follow and then click on the clan section, then Join a clan, and find the name of the clan or clanleader.  When you click on the clan leader's name to join their clan, a message will be sent to them to make sure that they want to let you in.<hr>

<span class="brownHeading">How can I communicate with other players?</span><br>
You can send mail to specific players using the Mail link on the left side of screen or from a players profile page.  You can send mail to all your clan members from the Clan link if you have a clan.  To check your own messages go to Mail and click Inbox.  You can post public messages to players on the chat board.<hr>

For more detail see: <a href="about.php">the "About" page</a> or <a href="http://ninjawars.pbwiki.com">the Wiki</a>.

<?php
include SERVER_ROOT."interface/footer.php";
?>
