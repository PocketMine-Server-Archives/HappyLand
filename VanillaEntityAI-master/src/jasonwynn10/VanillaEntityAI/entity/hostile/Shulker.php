<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI\entity\hostile;

use jasonwynn10\VanillaEntityAI\entity\Collidable;
use jasonwynn10\VanillaEntityAI\entity\CollisionCheckingTrait;
use jasonwynn10\VanillaEntityAI\entity\CreatureBase;
use jasonwynn10\VanillaEntityAI\entity\MonsterBase;
use pocketmine\entity\Entity;
use pocketmine\level\Position;
use pocketmine\nbt\tag\CompoundTag;

class Shulker extends MonsterBase implements Collidable {
	use CollisionCheckingTrait;
	public const NETWORK_ID = self::SHULKER;
	public $width = 1.0;
	public $height = 1.0;

	public function initEntity() : void {
		parent::initEntity(); // TODO: Change the autogenerated stub
	}

	/**
	 * @param int $tickDiff
	 *
	 * @return bool
	 */
	public function entityBaseTick(int $tickDiff = 1) : bool {
		return parent::entityBaseTick($tickDiff); // TODO: Change the autogenerated stub
	}

	/**
	 * @return array
	 */
	public function getDrops() : array {
		return parent::getDrops(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		return "Shulker";
	}

	/**
	 * @param Position $spawnPos
	 * @param CompoundTag|null $spawnData
	 *
	 * @return null|CreatureBase
	 */
	public static function spawnMob(Position $spawnPos, ?CompoundTag $spawnData = null) : ?CreatureBase {
		// TODO: Implement spawnMob() method.
	}

	/**
	 * @param Position $spawnPos
	 * @param null|CompoundTag $spawnData
	 *
	 * @return null|CreatureBase
	 */
	public static function spawnFromSpawner(Position $spawnPos, ?CompoundTag $spawnData = null) : ?CreatureBase {
		// TODO: Implement spawnFromSpawner() method.
	}

	/**
	 * @param Entity $entity
	 */
	public function onCollideWithEntity(Entity $entity) : void {
		// TODO: Implement onCollideWithEntity() method.
	}
}