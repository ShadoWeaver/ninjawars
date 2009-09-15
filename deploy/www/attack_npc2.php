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
	