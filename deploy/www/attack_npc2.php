<$php
$victim_alive   = true;
$starting_turns = getTurns($username);
$username_turns = $starting_turns;
$username_level = getLevel($username);
	
	protected $m_name;
	protected $m_ignoresStealth;
	protected $m_targetDamage;
	protected $m_turnCost;
	protected $m_turnChange;
	protected $m_covert;

	public function __construction$p_name)
	{
		$this->m_ignoresStealth = false;
		$this->m_name = trim($p_name);
		$this->m_turnCost = 1;
	}

	public function getName()
	{
		return $this->m_name;
	}

	public function setIgnoresStealth($p_ignore)
	{
		$this->m_ignoresStealth = (boolean)$p_ignore;
	}

	public function ignoresStealth()
	{
		return $this->m_ignoresStealth;
	}

	public function setTargetDamage($p_damage)
	{
		$this->m_targetDamage = (float)$p_damage;
	}
	
	public function getTargetDamage()
	{
		return $this->m_targetdamage;
	}

	public function getTurnCost()
	{
		return $this->m_turnCost;
	}

	public function setTurnChange($p_turns)
	{
		$this->m_turnChange = (float)$p_turns;	
	}

	public function getTurnChange()
	{
		return $this->m_turnChange;
	}

	public function setCovert($p_covert)
	{
		$this->m_covert = (boolean)$p_covert;
	}
	
	public function isCovert()
	{
		return $this->m_covert;
	}
}


 $oni = $villager = $samurai = $merchant = $guard = $theif 

if ($victom == 'Oni')
{
	$npc = Oni;
	$oni->setIgnoreStealth(true);
	$oni_attack(rand(1, 20);
}
else if
{
	$npc = Villager;
	$villager->setIgnoreStealth(true);
	$villager_attack(1, 10);
}
else if
{
	$npc = Samurai
	$samurai->setignoreStealth(true);
	$samurai_attack


 $ninja_str               = getStrength($username);

				$ninja_health            = getHealth($username);
				$samurai_damage_array[1] = rand(1, $ninja_str);
				$samurai_damage_array[2] = rand(10, 10 + round($ninja_str * 1.2));
				$does_ninja_succeed      = rand(1, 2);

				if ($does_ninja_succeed == 1) {
					$samurai_damage_array[3] = rand(30 + round($ninja_str * 0.2), 30 + round($ninja_str * 1.7));
				} else {
					$samurai_damage_array[3] = ($ninja_health - $samurai_damage_array[1] - $samurai_damage_array[2]);  //Instant death.




$attacker = $username;
$params   = array('required_turns'=>$turn_cost, 'ignores_stealth'=>$item->ignoresStealth(), 'self_use'=>$selfTarget);
assert(!!$selfTarget || $attacker != $target);

$AttackLegal    = new AttackLegal($attacker, $target, $params);
$attack_allowed = $AttackLegal->check();
$attack_error   = $AttackLegal->getError();

	$oni_kill_loss   = 1;
			$player_turns    = subtractTurns($username, $oni_turn_loss);
			$attacker_health = subtractHealth($username, $oni_health_loss);
			$attacker_kills  = subtractKills($username, $oni_kill_loss);
			$oni_killed      = false;

			if ($player_turns > 50 && $attacker_health > 0) { // *** If the turns are high/you are energetic, and you survive, you can kill them. ***
				$oni_killed = true;
				addItem($username, "Dim Mak", 1);

			}
			echo "<div class='ninja-error'>An Oni attacks you as you wander!</div>
			<img src='images/Oni_pelted_by_beans.jpg' style='width:450px'>
			<p>The Oni saps some of your soul before "
			.($oni_killed ? "you kill it." : "it escapes into the wilderness.")."</p>";
		} else if ($victim == "" ) {
			echo "You attack the air.\n";
		} else if ($victim == "villager") { // *** VILLAGER ***
			echo "The villager sees you and prepares to defend!<br><br>\n";

					


	