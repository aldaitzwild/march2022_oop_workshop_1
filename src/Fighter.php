<?php
class Fighter 
{
    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life;

    public const MAX_LIFE = 100;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = self::MAX_LIFE;
    }

    public function fight(Fighter $opponent): int 
    {
        $damage = rand(1, $this->strength);
        $damage = $damage - rand(0, $opponent->dexterity);

        if($damage > 0) 
        {
            if($damage > $opponent->life)
            {
                $opponent->life = 0;
            } else {
                $opponent->life -= $damage;
            }
        } else {
            $damage = 0;
        }

        return $damage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function isAlive(): bool
    {
        return $this->life > 0;
    }
}