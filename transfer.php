<?php
die("nezapinat");
require_once 'php/autoloader.class.php';
$a = new Autoloader();

// tohle by bylo asi lepší, ale jak inteligentně parsovat?: http://hydra-media.cursecdn.com/minecraft.gamepedia.com/archive/d/d1/20140809135006!DataValues.svg

$items = array(

  1=>array(

    0=>array(

      'name'=>array(

      'en'=>'Stone',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Stone.png'),

    1=>array(

      'name'=>array(

      'en'=>'Granite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Granite.png'),

    2=>array(

      'name'=>array(

      'en'=>'Polished Granite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Polished_Granite.png'),

    3=>array(

      'name'=>array(

      'en'=>'Diorite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Diorite.png'),

    4=>array(

      'name'=>array(

      'en'=>'Polished Diorite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Polished_Diorite.png'),

    5=>array(

      'name'=>array(

      'en'=>'Andesite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Andesite.png'),

    6=>array(

      'name'=>array(

      'en'=>'Polished Andesite',

      ''=>'',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Polished_Andesite.png'),

    -1=>array(

      'name'=>array(

      'en'=>'Unknown Stone',

      ''=>'',

      ''=>''),

      'emc'=>1,

      'icon'=>'Stone.png'), 

  ),

  2=>array(

    'name'=>array(

      'en'=>'Grass',

      ''=>'',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Grass.png'),

  3=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Dirt',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Dirt.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Coarse Dirt',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Coarse_Dirt.png'),

	2 =>array(

      'name'=>array(

        'en'=>'Podzol',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Dirt_Podzol.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Dirt',

        ''=>'',

        ''=>'',

        ''=>''),

      'icon'=>'Dirt.png'),

	), 

  4=>array(

    'name'=>array(

      'en'=>'Cobblestone',

      ''=>'',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Cobblestone.png'),

  5=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Oak)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Spruce)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Birch)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Jungle)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Jungle.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Acacia)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Acacia.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Wooden Plank (Dark Oak)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Wooden_Plank_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Wooden Plank',

        ''=>'',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Oak.png'),

  ),

  6=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Sapling (Oak)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Sapling (Spruce)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Sapling (Birch)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Sapling (Jungle)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Jungle.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Sapling (Acacia)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Acacia.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Sapling (Dark Oak)',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Sapling_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Sapling',

        ''=>'',

        ''=>'',

        ''=>''),

      'icon'=>'Sapling_Oak.png'),

  ),

  7=>array(

    'name'=>array(

      'en'=>'Bedrock',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Bedrock.png'),

  8=>array(

    'name'=>array(

      'en'=>'Water',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Water.png'),

  9=>array(

    'name'=>array(

      'en'=>'Stationary Water',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Water.png'),

  10=>array(

    'name'=>array(

      'en'=>'Lava',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Lava.png'),

  11=>array(

    'name'=>array(

      'en'=>'Stationary Lava',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Lava.png'),

  12=>array(

    0=>array(

      'name'=>array(

        'en'=>'Sand',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Sand.png'),

    1=>array(

      'name'=>array(

        'en'=>'Red Sand',

        ''=>'',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Sand_Red.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Sand',

        ''=>'',

        ''=>''),

      'icon'=>'Sand.png'),

    ),

  13=>array(

    'name'=>array(

      'en'=>'Gravel',

      ''=>'',

      ''=>'',

      ''=>''),

    'emc'=>4,

    'icon'=>'Gravel.png'),

  14=>array(

    'name'=>array(

      'en'=>'Gold Ore',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Gold_Ore.png'),

  15=>array(

    'name'=>array(

      'en'=>'Iron Ore',

      ''=>'',

      ''=>'',

      ''=>''),

    'icon'=>'Iron_Ore.png'),

  16=>array(

    'name'=>array(

      'en'=>'Coal Ore',

      ''=>'',

      ''=>''),

    'icon'=>'Coal_Ore.png'),

  17=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Oak Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Spruce Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Birch Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Jungle Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Jungle.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Log',

        ''=>'',

        ''=>''),

      'icon'=>'Log_Oak.png'),

  ),

  18=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Oak Leaves',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Leaves_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Spruce Leaves',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Leaves_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Birch Leaves',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Leaves_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Jungle Leaves',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Leaves_Jungle.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Leaves',

        ''=>'',

        ''=>''),

      'icon'=>'Leaves_Oak.png'),

  ),

  19=>array(

    0=>array(

      'name'=>array(

        'en'=>'Sponge',

        ''=>'',

        ''=>''),

      'icon'=>'Sponge.png'),

    1=>array(

      'name'=>array(

        'en'=>'Wet Sponge',

        ''=>'',

        ''=>''),

      'icon'=>'Wet_Sponge.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Sponge',

        ''=>'',

        ''=>''),

      'icon'=>'Sponge.png'),

    ),

  20=>array(

    'name'=>array(

      'en'=>'Glass',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Glass.png'),

  21=>array(

    'name'=>array(

      'en'=>'Lapis Lazuli Ore',

      ''=>'',

      ''=>''),

    'emc'=>864,

    'icon'=>'Lapis_Lazuli_Ore.png'),

  22=>array(

    'name'=>array(

      'en'=>'Lapis Lazuli Block',

      ''=>'',

      ''=>''),

    'emc'=>7776,

    'icon'=>'Lapis_Lazuli_Block.png'),

  23=>array(

    'name'=>array(

      'en'=>'Dispenser',

      ''=>'',

      ''=>''),

    'emc'=>119,

    'icon'=>'Dispenser.png'),

  24=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Sandstone.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Decorative Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Sandstone_Decorative.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Smooth Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Sandstone_Smooth.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Sandstone',

        ''=>'',

        ''=>''),

      'icon'=>'Sandstone.png'),

  ),

  25=>array(

    'name'=>array(

      'en'=>'Note Block',

      ''=>'',

      ''=>''),

    'emc'=>128,

    'icon'=>'Note_Block.png'),

  26=>array(

    'name'=>array(

      'en'=>'Bed Block',

      ''=>'',

      ''=>''),

    'icon'=>'Bed.png'),

  27=>array(

    'name'=>array(

      'en'=>'Powered Rail',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Rail_Powered.png'),

  28=>array(

    'name'=>array(

      'en'=>'Detector Rail',

      ''=>'',

      ''=>''),

    'emc'=>256,

    'icon'=>'Rail_Detector.png'),

  29=>array(

    'name'=>array(

      'en'=>'Sticky Piston',

      ''=>'',

      ''=>''),

    'emc'=>372,

    'icon'=>'Sticky_Piston.png'),

  30=>array(

    'name'=>array(

      'en'=>'Web',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Cobweb.png'),

  31=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Dead Shrub',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Tall_Grass1.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Tall Grass',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Tall_Grass2.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Live Shrub',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Tall_Grass3.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Shrub',

        ''=>'',

        ''=>''),

      'icon'=>'Tall_Grass1.png'),

  ),

  32=>array(

    'name'=>array(

      'en'=>'Dead Shrub',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Dead_Bush.png'),

  33=>array(

    'name'=>array(

      'en'=>'Piston',

      ''=>'',

      ''=>''),

    'emc'=>348,

    'icon'=>'Piston.png'),

  34=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Piston',

        ''=>'',

        ''=>''),

      'emc'=>348,

      'icon'=>'Piston.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Sticky_Piston',

        ''=>'',

        ''=>''),

      'emc'=>372,

      'icon'=>'Sticky_Piston.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Piston',

        ''=>'',

        ''=>''),

      'icon'=>'Piston.png'),

  ),

  35=>array(

    0 =>array(

      'name'=>array(

        'en'=>'White Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_White.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Orange Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Orange.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Magenta Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Magenta.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Light Blue Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Light_Blue.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Yellow Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Yellow.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Light Green Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Lime.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Pink Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Pink.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Grey Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Light Grey Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Light_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Cyan Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Cyan.png'),

    10=>array(

      'name'=>array(

        'en'=>'Purple Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Purple.png'),

    11=>array(

      'name'=>array(

        'en'=>'Blue Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Blue.png'),

    12=>array(

      'name'=>array(

        'en'=>'Brown Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Brown.png'),

    13=>array(

      'name'=>array(

        'en'=>'Dark Green Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Green.png'),

    14=>array(

      'name'=>array(

        'en'=>'Red Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Red.png'),

    15=>array(

      'name'=>array(

        'en'=>'Black Wool',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Wool_Black.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Wool',

        ''=>'',

        ''=>''),

      'icon'=>'Wool_White.png'),

  ),

  37=>array(

    'name'=>array(

      'en'=>'Dandelion',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Flower_Dandelion.png'),

  38=>array(

    0 => array(

      'name'=>array(

        'en'=>'Poppy (Rose)',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Poppy.png'),

    1 => array(

      'name'=>array(

        'en'=>'Blue Orchid',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Blue_Orchid.png'),

    2 => array(

      'name'=>array(

        'en'=>'Allium',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Allium.png'),

    3 => array(

      'name'=>array(

        'en'=>'Azure Bluet',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Azure_Bluet.png'),

    4 => array(

      'name'=>array(

        'en'=>'Red Tulip',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Tulip_Red.png'),

    5 => array(

      'name'=>array(

        'en'=>'Orange Tulip',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Tulip_Orange.png'),

    6 => array(

      'name'=>array(

        'en'=>'White Tulip',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Tulip_White.png'),

    7 => array(

      'name'=>array(

        'en'=>'Ping Tulip',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Tulip_Pink.png'),

    8 => array(

      'name'=>array(

        'en'=>'Oxeye Daisy',

        ''=>'',

        ''=>''),

      'emc'=>16,

      'icon'=>'Flower_Oxeye_Daisy.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Flower',

        ''=>'',

        ''=>''),

      'icon'=>'Flower_Poppy.png'),

	),

  39=>array(

    'name'=>array(

      'en'=>'Brown Mushroom',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Mushroom_Brown.png'),

  40=>array(

    'name'=>array(

      'en'=>'Red Mushroom',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Mushroom_Red.png'),

  41=>array(

    'name'=>array(

      'en'=>'Gold Block',

      ''=>'',

      ''=>''),

    'emc'=>18432,

    'icon'=>'Gold_Block.png'),

  42=>array(

    'name'=>array(

      'en'=>'Iron Block',

      ''=>'',

      ''=>''),

    'emc'=>2304,

    'icon'=>'Iron_Block.png'),

  // subitems 1, 2, and 3 not supported by minecraft

  //TODO: need images for these

  43=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Double Stone Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Slab_Stone_Double.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Double Sandstone Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Sandstone.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Wood.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Double Cobblestone Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Cobblestone.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Double Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Slab_Stone_Double.png'),

  ),

  44=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Stone Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Slab_Stone.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Sandstone Slab',

        ''=>'',

        ''=>''),

      'emc'=>2,

      'icon'=>'Slab_Sandstone.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Wooden Slab',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Slab_Wood_Oak.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Cobblestone Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Slab_Cobblestone.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Brick Slab',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Slab_Brick.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Stone Brick Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Slab_Stone_Brick.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Quartz Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Slab_Quartz.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Slab_Stone.png'),

  ),

  45=>array(

    'name'=>array(

      'en'=>'Brick Block',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Brick_Block.png'),

  46=>array(

    'name'=>array(

      'en'=>'TNT',

      ''=>'',

      ''=>''),

    'emc'=>964,

    'icon'=>'TNT.png'),

  47=>array(

    'name'=>array(

      'en'=>'Bookshelf',

      ''=>'',

      ''=>''),

    'emc'=>336,

    'icon'=>'Bookshelf.png'),

  48=>array(

    'name'=>array(

      'en'=>'Mossy Cobblestone',

      ''=>'',

      ''=>''),

    'emc'=>145,

    'icon'=>'Cobblestone_Moss.png'),

  49=>array(

    'name'=>array(

      'en'=>'Obsidian',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Obsidian.png'),

  50=>array(

    'name'=>array(

      'en'=>'Torch',

      ''=>'',

      ''=>''),

    'emc'=>9,

    'icon'=>'Torch.png'),

  51=>array(

    'name'=>array(

      'en'=>'Fire',

      ''=>'',

      ''=>''),

    'icon'=>'Fire.png'),

  52=>array(

    50=>array(

      'name'=>array(

        'en'=>'Creeper Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Creeper.png'),

    51=>array(

      'name'=>array(

        'en'=>'Skeleton Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Skeleton.png'),

    52=>array(

      'name'=>array(

        'en'=>'Spider Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Spider.png'),

    53=>array(

      'name'=>array(

        'en'=>'Giant Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Giant.png'),

    54=>array(

      'name'=>array(

        'en'=>'Zombie Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Zombie.png'),

    55=>array(

      'name'=>array(

        'en'=>'Slime Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Slime.png'),

    56=>array(

      'name'=>array(

        'en'=>'Ghast Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Ghast.png'),

    57=>array(

      'name'=>array(

        'en'=>'Zombie Pigman Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Zombie_Pigman.png'),

    58=>array(

      'name'=>array(

        'en'=>'Enderman Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Enderman.png'),

    59=>array(

      'name'=>array(

        'en'=>'Cave Spider Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Cave_Spider.png'),

    60=>array(

      'name'=>array(

        'en'=>'Silverfish Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Silverfish.png'),

    61=>array(

      'name'=>array(

        'en'=>'Blaze Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Blaze.png'),

    62=>array(

      'name'=>array(

        'en'=>'Magma Cube Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Magma_Cube.png'),

    90=>array(

      'name'=>array(

        'en'=>'Pig Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Pig.png'),

    91=>array(

      'name'=>array(

        'en'=>'Sheep Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Sheep.png'),

    92=>array(

      'name'=>array(

        'en'=>'Cow Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Cow.png'),

    93=>array(

      'name'=>array(

        'en'=>'Chicken Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Chicken.png'),

    94=>array(

      'name'=>array(

        'en'=>'Squid Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Squid.png'),

    95=>array(

      'name'=>array(

        'en'=>'Wolf Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Wolf.png'),

    96=>array(

      'name'=>array(

        'en'=>'Mooshroom Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Mooshroom.png'),

    97=>array(

      'name'=>array(

        'en'=>'Snowman Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Snowman.png'),

   120=>array(

      'name'=>array(

        'en'=>'Villager Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Villager.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Spawner',

        ''=>'',

        ''=>''),

      'icon'=>'Spawner_Pig.png'),

  ),

  53=>array(

    'name'=>array(

      'en'=>'Wooden Stairs (Oak)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Oak.png'),

  54=>array(

    'name'=>array(

      'en'=>'Chest',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Chest.png'),

  56=>array(

    'name'=>array(

      'en'=>'Diamond Ore',

      ''=>'',

      ''=>''),

    'icon'=>'Diamond_Ore.png'),

  57=>array(

    'name'=>array(

      'en'=>'Diamond Block',

      ''=>'',

      ''=>''),

    'emc'=>73728,

    'icon'=>'Diamond_Block.png'),

  58=>array(

    'name'=>array(

      'en'=>'Crafting Table',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Crafting_Table.png'),

//  // TODO=> add crop picture(s)

//  59=>array(

//    'name'=>array(

//      'en'=>'Crops',

//      ''=>'',

//      ''=>''),

//    'icon'=>'Crops'),

  60=>array(

    'name'=>array(

      'en'=>'Soil',

      ''=>'',

      ''=>''),

    'icon'=>'Farmland.png'),

  61=>array(

    'name'=>array(

      'en'=>'Furnace',

      ''=>'',

      ''=>''),

    'emc'=>8,

    'icon'=>'Furnace.png'),

  62=>array(

    'name'=>array(

      'en'=>'Burning Furnace',

      ''=>'',

      ''=>''),

    'icon'=>'Furnace.png'),

  63=>array(

    'name'=>array(

      'en'=>'Sign Post',

      ''=>'',

      ''=>''),

    'icon'=>'Sign.png',

    'stack'=>16),

  64=>array(

    'name'=>array(

      'en'=>'Wooden Door Block',

      ''=>'',

      ''=>''),

    'icon'=>'Door_Wood.png',

    'stack'=>1),

  65=>array(

    'name'=>array(

      'en'=>'Ladder',

      ''=>'',

      ''=>''),

    'emc'=>14,

    'icon'=>'Ladder.png'),

  66=>array(

    'name'=>array(

      'en'=>'Rail',

      ''=>'',

      ''=>''),

    'emc'=>96,

    'icon'=>'Rails.png'),

  67=>array(

    'name'=>array(

      'en'=>'Cobblestone Stairs',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Stairs_Cobblestone.png'),

  68=>array(

    'name'=>array(

      'en'=>'Wall Sign',

      ''=>'',

      ''=>''),

    'icon'=>'Sign.png',

    'stack'=>16),

  69=>array(

    'name'=>array(

      'en'=>'Lever',

      ''=>'',

      ''=>''),

    'emc'=>5,

    'icon'=>'Lever.png'),

  70=>array(

    'name'=>array(

      'en'=>'Stone Pressure Plate',

      ''=>'',

      ''=>''),

    'emc'=>2,

    'icon'=>'Pressure_Plate_Stone.png'),

  71=>array(

    'name'=>array(

      'en'=>'Iron Door Block',

      ''=>'',

      ''=>''),

    'icon'=>'Door_Iron.png',

    'stack'=>1),

  72=>array(

    'name'=>array(

      'en'=>'Wooden Pressure Plate',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Pressure_Plate_Wood.png'),

  73=>array(

    'name'=>array(

      'en'=>'Redstone Ore',

      ''=>'',

      ''=>''),

    'icon'=>'Redstone_Ore.png'),

  74=>array(

    'name'=>array(

      'en'=>'Redstone Ore (Glowing)',

      ''=>'',

      ''=>''),

    'icon'=>'Redstone_Ore.png'),

  75=>array(

    'name'=>array(

      'en'=>'Redstone Torch',

      ''=>'',

      ''=>''),

    'emc'=>68,

    'icon'=>'Redstone_Torch.png'),

  76=>array(

    'name'=>array(

      'en'=>'Redstone Torch',

      ''=>'',

      ''=>''),

    'emc'=>68,

    'icon'=>'Redstone_Torch.png'),

  77=>array(

    'name'=>array(

      'en'=>'Button (Stone)',

      ''=>'',

      ''=>''),

    'emc'=>2,

    'icon'=>'Button_Stone.png'),

  78=>array(

    'name'=>array(

      'en'=>'Snow',

      ''=>'',

      ''=>''),

    'icon'=>'Snow_Block.png'),

  79=>array(

    'name'=>array(

      'en'=>'Ice',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Ice.png'),

  80=>array(

    'name'=>array(

      'en'=>'Snow Block',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Snow_Block.png'),

  81=>array(

    'name'=>array(

      'en'=>'Cactus',

      ''=>'',

      ''=>''),

    'emc'=>8,

    'icon'=>'Cactus.png'),

  82=>array(

    'name'=>array(

      'en'=>'Clay',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Clay_Block.png'),

  84=>array(

    'name'=>array(

      'en'=>'Jukebox',

      ''=>'',

      ''=>''),

    'emc'=>8256,

    'icon'=>'Jukebox.png'),

  85=>array(

    'name'=>array(

      'en'=>'Fence',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Fence.png'),

  86=>array(

    'name'=>array(

      'en'=>'Pumpkin',

      ''=>'',

      ''=>''),

    'emc'=>144,

    'icon'=>'Pumpkin.png'),

  87=>array(

    'name'=>array(

      'en'=>'Netherrack',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Netherrack.png'),

  88=>array(

    'name'=>array(

      'en'=>'Soul Sand',

      ''=>'',

      ''=>''),

    'emc'=>49,

    'icon'=>'Soul_Sand.png'),

  89=>array(

    'name'=>array(

      'en'=>'Glowstone',

      ''=>'',

      ''=>''),

    'emc'=>1536,

    'icon'=>'Glowstone_Block.png'),

  90=>array(

    'name'=>array(

      'en'=>'Portal',

      ''=>'',

      ''=>''),

    'icon'=>'Portal.png'),

  91=>array(

    'name'=>array(

      'en'=>'Jack-O-Lantern',

      ''=>'',

      ''=>''),

    'emc'=>144,

    'icon'=>'Jack-O-Lantern.png'),

  92=>array(

    'name'=>array(

      'en'=>'Cake',

      ''=>'',

      ''=>''),

    'icon'=>'Cake.png',

    'stack'=>1),

  95=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Stained Glass (White)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_White.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Orange)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Orange.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Magenta)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Magenta.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Light Blue)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Light_Blue.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Yellow)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Yellow.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Light Green)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Lime.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Pink)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Pink.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Grey)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Light Grey)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Light_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Stained Glass (Cyan)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Cyan.png'),

    10=>array(

      'name'=>array(

        'en'=>'Stained Glass (Purple)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Purple.png'),

    11=>array(

      'name'=>array(

        'en'=>'Stained Glass (Blue)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Blue.png'),

    12=>array(

      'name'=>array(

        'en'=>'Stained Glass (Brown)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Brown.png'),

    13=>array(

      'name'=>array(

        'en'=>'Stained Glass (Dark Green)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Green.png'),

    14=>array(

      'name'=>array(

        'en'=>'Stained Glass (Red)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Red.png'),

    15=>array(

      'name'=>array(

        'en'=>'Stained Glass (Black)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Stained_Black.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Stained Glass',

        ''=>'',

        ''=>''),

      'icon'=>'Glass_Stained_White.png'),

  ),

  96=>array(

    'name'=>array(

      'en'=>'Trapdoor',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon'=>'Trapdoor.png'),

  97=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Stone Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Cobblestone Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Cobblestone.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Stone Brick Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Mossy Stone Brick Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Mossy.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Cracked Stone Brick Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Cracked.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Chiseled Stone Brick Monster Egg',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Circle.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Brick',

        ''=>'',

        ''=>''),

      'icon'=>'Stone_Brick.png'),

  ),

  98=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Stone Brick',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Mossy Stone Brick',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Mossy.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Cracked Stone Brick',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Cracked.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Chiseled Stone Brick',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Stone_Brick_Chiseled.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Brick',

        ''=>'',

        ''=>''),

      'icon'=>'Stone_Brick.png'),

  ),

  99=>array(

    'name'=>array(

      'en'=>'Brown Mushroom Cap',

      ''=>'',

      ''=>''),

    'icon'=>'Mushroom_Brown.png'),

  100=>array(

    'name'=>array(

      'en'=>'Red Mushroom Cap',

      ''=>'',

      ''=>''),

    'icon'=>'Mushroom_Red.png'),

  101=>array(

    'name'=>array(

      'en'=>'Iron Bars',

      ''=>'',

      ''=>''),

    'emc'=>96,

    'icon'=>'Iron_Bars.png'),

  102=>array(

    'name'=>array(

      'en'=>'Glass Pane',

      ''=>'',

      ''=>''),

    'emc'=>102,

    'icon'=>'Glass_Pane.png'),

  103=>array(

    'name'=>array(

      'en'=>'Melon',

      ''=>'',

      ''=>''),

    'emc'=>144,

    'icon'=>'Melon_Block.png'),

//  // TODO=> add pumpkin and melon steam pictures

//  104=>array(

//    'name'=>array(

//      'en'=>'Pumpkin Stem',

//        ''=>'',

//        ''=>''),

//    'icon'=>''),

//  105=>array(

//    'name'=>array(

//      'en'=>'Melon Stem',

//        ''=>'',

//        ''=>''),

//    'icon'=>''),

  106=>array(

    'name'=>array(

      'en'=>'Vines',

      ''=>'',

      ''=>''),

    'emc'=>8,

    'icon'=>'Vines.png'),

  107=>array(

    'name'=>array(

      'en'=>'Fence Gate',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Fence_Gate.png'),

  108=>array(

    'name'=>array(

      'en'=>'Brick Stairs',

      ''=>'',

      ''=>''),

    'emc'=>96,

    'icon'=>'Stairs_Brick.png'),

  109=>array(

    'name'=>array(

      'en'=>'Stone Brick Stairs',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Stairs_Stone_Brick.png'),

  110=>array(

    'name'=>array(

      'en'=>'Mycelium',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Mycelium.png'),

  111=>array(

    'name'=>array(

      'en'=>'Lily Pad',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Lily_Pad.png'),

  112=>array(

    'name'=>array(

      'en'=>'Nether Brick',

      ''=>'',

      ''=>''),

    'emc'=>4,

    'icon'=>'Nether_Brick.png'),

  113=>array(

    'name'=>array(

      'en'=>'Nether Brick Fence',

      ''=>'',

      ''=>''),

    'emc'=>4,

    'icon'=>'Nether_Brick_Fence.png'),

  114=>array(

    'name'=>array(

      'en'=>'Nether Brick Stairs',

      ''=>'',

      ''=>''),

    'emc'=>6,

    'icon'=>'Stairs_Nether_Brick.png'),

  115=>array(

    'name'=>array(

      'en'=>'Nether Wart',

      ''=>'',

      ''=>''),

    'icon'=>'Nether_Wart.png'),

  116=>array(

    'name'=>array(

      'en'=>'Enchantment Table',

      ''=>'',

      ''=>''),

    'emc'=>16736,

    'icon'=>'Enchantment_Table.png'),

  117=>array(

    'name'=>array(

      'en'=>'Brewing Stand',

      ''=>'',

      ''=>''),

    'icon'=>'Brewing_Stand.png'),

  118=>array(

    'name'=>array(

      'en'=>'Cauldron',

      ''=>'',

      ''=>''),

    'icon'=>'Cauldron.png'),

  119=>array(

    'name'=>array(

      'en'=>'End Portal',

      ''=>'',

      ''=>''),

    'icon'=>'End_Portal.png'),

  120=>array(

    'name'=>array(

      'en'=>'End Portal Frame',

      ''=>'',

      ''=>''),

    'icon'=>'End_Portal_Frame.png'),

  121=>array(

    'name'=>array(

      'en'=>'End Stone',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'End_Stone.png'),

  122=>array(

    'name'=>array(

      'en'=>'Dragon Egg',

      ''=>'',

      ''=>''),

    'emc'=>139264,

    'icon'=>'Dragon_Egg.png'),

  123=>array(

    'name'=>array(

      'en'=>'Redstone Lamp',

      ''=>'',

      ''=>''),

    'emc'=>1792,

    'icon'=>'Redstone_Lamp.png'),

  //TODO: need images for these

  125=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Oak)',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Spruce)',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Birch)',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Jungle)',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Jungle.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Acacia)',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Wooden_Plank_Acacia.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Double Wooden Slab (Dark Oak)',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Wooden_Plank_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Double Wooden Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Wooden_Plank_Oak.png'),

  ),

  126=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Oak)',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Slab_Wood_Oak.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Spruce)',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Slab_Wood_Spruce.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Birch)',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Slab_Wood_Birch.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Jungle)',

        ''=>'',

        ''=>''),

      'emc'=>4,

      'icon'=>'Slab_Wood_Jungle.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Acacia)',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Slab_Wood_Acacia.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Wooden Slab (Dark Oak)',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Slab_Wood_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Wooden Slab',

        ''=>'',

        ''=>''),

      'icon'=>'Slab_Wood_Oak.png'),

  ),

  128=>array(

    'name'=>array(

      'en'=>'Sandstone Stairs',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Stairs_Sandstone.png'),

  129=>array(

    'name'=>array(

      'en'=>'Emerald Ore',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Emerald_Ore.png'),

  130=>array(

    'name'=>array(

      'en'=>'Ender Chest',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Ender_Chest.png'),

  131=>array(

    'name'=>array(

      'en'=>'Tripwire Hook',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Tripwire_Hook.png'),

  132=>array(

    'name'=>array(

      'en'=>'Tripwire',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Tripwire.png'),

  133=>array(

    'name'=>array(

      'en'=>'Emerald Block',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Emerald_Block.png'),

  134=>array(

    'name'=>array(

      'en'=>'Wooden Stairs (Spruce)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Spruce.png'),

  135=>array(

   'name'=>array(

      'en'=>'Wooden Stairs (Birch)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Birch.png'),

  136=>array(

    'name'=>array(

      'en'=>'Wooden Stairs (Jungle)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Jungle.png'),

  137=>array(

    'name'=>array(

      'en'=>'Command Block',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Command_Block.png'),

  138=>array(

    'name'=>array(

      'en'=>'Beacon Block',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Beacon_Block.png'),

  139=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Cobblestone Wall',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Wall_Cobblestone.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Mossy Cobblestone Wall',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Wall_Mossy_Cobblestone.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Cobblestone Wall',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Wall_Cobblestone.png'),

  ),

//  140=>array(

//    'name'=>array(

//      'en'=>'Flower Pot',

//      ''=>'',

//      ''=>''),

//    'emc'=>,

//    'icon'=>''),

//  141=>array(

//    'name'=>array(

//      'en'=>'Carrot (Crop)',

//      ''=>'',

//      ''=>''),

//    'emc'=>,

//    'icon'=>''),

//  142=>array(

//    'name'=>array(

//      'en'=>'Potatoes (Crop)',

//      ''=>'',

//      ''=>''),

//    'emc'=>,

//    'icon'=>''),

  143=>array(

    'name'=>array(

      'en'=>'Button (Wood)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Button_Wood.png'),

  145=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Anvil',

        ''=>'',

        ''=>''),

      'icon'=>'Anvil.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Slightly Damaged Anvil',

        ''=>'',

        ''=>''),

      'icon'=>'Anvil.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Very Damaged Anvil',

        ''=>'',

        ''=>''),

      'icon'=>'Anvil.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Anvil',

        ''=>'',

        ''=>''),

      'icon'=>'Anvil.png'),

  ),

  147=>array(

    'name' =>array(

      'en'=>'Weighted Pressure Plate (Light)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Pressure_Plate_Weighted_Light.png'),

  148=>array(

    'name' =>array(

      'en'=>'Weighted Pressure Plate (Heavy)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Pressure_Plate_Weighted_Heavy.png'),

  151=>array(

    'name' =>array(

      'en'=>'Daylight Sensor',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Daylight_Sensor.png'),

  152=>array(

    'name' =>array(

      'en'=>'Redstone Block',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Redstone_Block.png'),

  153=>array(

    'name' =>array(

      'en'=>'Nether Quartz Ore',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Nether_Quartz_Ore.png'),

  154=>array(

    'name' =>array(

      'en'=>'Hopper',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Hopper.png'),

  155=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Quartz Block',

        ''=>'',

        ''=>''),

      'icon'=>'Quartz_Block.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Quartz Block (Chiseled)',

        ''=>'',

        ''=>''),

      'icon'=>'Quartz_Block_Chiseled.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Quartz Block (Pillar)',

        ''=>'',

        ''=>''),

      'icon'=>'Quartz_Block_Pillar.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Quartz Block',

        ''=>'',

        ''=>''),

      'icon'=>'Quartz_Block.png'),

  ),

  156=>array(

    'name' =>array(

      'en'=>'Quartz Stairs',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Stairs_Quartz.png'),

  157=>array(

    'name' =>array(

      'en'=>'Activator Rail',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Activator_Rail.png'),

  158=>array(

    'name' =>array(

      'en'=>'Dropper',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Dropper.png'),

  159=>array(

    0 =>array(

      'name'=>array(

        'en'=>'White Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_White.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Orange Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Orange.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Magenta Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Magenta.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Light Blue Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Light_Blue.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Yellow Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Yellow.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Light Green Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Lime.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Pink Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Pink.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Grey Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Light Grey Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Light_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Cyan Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Cyan.png'),

    10=>array(

      'name'=>array(

        'en'=>'Purple Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Purple.png'),

    11=>array(

      'name'=>array(

        'en'=>'Blue Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Blue.png'),

    12=>array(

      'name'=>array(

        'en'=>'Brown Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Brown.png'),

    13=>array(

      'name'=>array(

        'en'=>'Dark Green Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Green.png'),

    14=>array(

      'name'=>array(

        'en'=>'Red Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Red.png'),

    15=>array(

      'name'=>array(

        'en'=>'Black Stained Clay',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Clay_Stained_Black.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Stained Clay',

        ''=>'',

        ''=>''),

      'icon'=>'Clay_Stained_White.png'),

  ),

  160=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (White)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_White.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Orange)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Orange.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Magenta)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Magenta.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Light Blue)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Light_Blue.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Yellow)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Yellow.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Light Green)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Lime.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Pink)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Pink.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Grey)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Light Grey)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Light_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Cyan)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Cyan.png'),

    10=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Purple)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Purple.png'),

    11=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Blue)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Blue.png'),

    12=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Brown)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Brown.png'),

    13=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Dark Green)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Green.png'),

    14=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Red)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Red.png'),

    15=>array(

      'name'=>array(

        'en'=>'Stained Glass Pane (Black)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Glass_Pane_Black.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Stained Glass Pane',

        ''=>'',

        ''=>''),

      'icon'=>'Glass_Pane_White.png'),

  ),

  161=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Leaves (Acacia)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Leaves_Acacia.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Leaves (Dark Oak)',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Leaves_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Leaves',

        ''=>'',

        ''=>'',

        ''=>''),

      'icon'=>'Leaves_Oak.png'),

  ),

  162=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Acacia Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Acacia.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Dark Oak Log',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Log_Dark_Oak.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Log',

        ''=>'',

        ''=>''),

      'icon'=>'Log_Oak.png'),

  ),

  163=>array(

    'name'=>array(

      'en'=>'Wooden Stairs (Acacia)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Acacia.png'),

  164=>array(

    'name'=>array(

      'en'=>'Wooden Stairs (Dark Oak)',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Stairs_Wood_Dark_Oak.png'),

  165=>array(

    'name'=>array(

      'en'=>'Slime Block',

      ''=>'',

      ''=>''),

//    'emc'=>12,

    'icon'=>'Slime_Block.png'),

  167=>array(

    'name'=>array(

      'en'=>'Iron Trapdoor',

      ''=>'',

      ''=>''),

//    'emc'=>12,

    'icon'=>'Iron_Trapdoor.png'),

  168=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Prismarine',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Prismarine.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Prismarine Bricks',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Prismarine_Bricks.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Dark Prismarine',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Dark_Prismarine.png'),

    -1 =>array(

      'name'=>array(

        'en'=>'Unknown Prismarine',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Prismarine.png'),

    ),

  169=>array(

    'name'=>array(

      'en'=>'Sea Lantern',

      ''=>'',

      ''=>''),

//    'emc'=>12,

    'icon'=>'Sea_Lantern.png'),

  170=>array(

    'name' =>array(

      'en'=>'Hay Bale',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Hay_Bale.png'),

  171=>array(

    0 =>array(

      'name'=>array(

        'en'=>'White Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_White.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Orange Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Orange.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Magenta Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Magenta.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Light Blue Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Light_Blue.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Yellow Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Yellow.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Light Green Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Lime.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Pink Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Pink.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Grey Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Light Grey Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Light_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Cyan Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Cyan.png'),

    10=>array(

      'name'=>array(

        'en'=>'Purple Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Purple.png'),

    11=>array(

      'name'=>array(

        'en'=>'Blue Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Blue.png'),

    12=>array(

      'name'=>array(

        'en'=>'Brown Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Brown.png'),

    13=>array(

      'name'=>array(

        'en'=>'Dark Green Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Green.png'),

    14=>array(

      'name'=>array(

        'en'=>'Red Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Red.png'),

    15=>array(

      'name'=>array(

        'en'=>'Black Carpet',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Carpet_Black.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Carpet',

        ''=>'',

        ''=>''),

      'icon'=>'Carpet_White.png'),

  ),

  172=>array(

    'name' =>array(

      'en'=>'Hardened Clay',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Clay_Hardened.png'),

  173=>array(

    'name' =>array(

      'en'=>'Block of Coal',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Coal_Block.png'),

  174=>array(

    'name'=>array(

      'en'=>'Packed Ice',

      ''=>'',

      ''=>''),

    'icon'=>'Ice_Packed.png',

    'stack'=>1),

  175=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Sunflower',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Flower_Sunflower.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Lilac',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Flower_Lilac.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Tall Grass',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Grass_Tall.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Large Fern',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Flower_Tall_Fern.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Rose Bush',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Flower_Tall_Rose.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Peony',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Flower_Peony.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Large Flower',

        ''=>'',

        ''=>''),

      'icon'=>'Grass_Tall.png'),

	),

179=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Red Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Red_Sandstone.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Chiseled Red Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Chiseled_Red_Sandstone.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Smooth Red Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Smooth_Red_Sandstone.png'),

    -1 =>array(

      'name'=>array(

        'en'=>'Unknown Red Sandstone',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Red_Sandstone.png'),
  ),
  180=>array(

    'name' =>array(

      'en'=>'Red Sandstone Stairs',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Red_Sandstone_Stairs.png'),

  182=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Red Sandstone Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Red_Sandstone_Slab.png'),

    -1 =>array(

      'name'=>array(

        'en'=>'Unknown Sandstone Slab',

        ''=>'',

        ''=>''),

      'emc'=>1,

      'icon'=>'Red_Sandstone_Slab.png'),

      ),

  183=>array(

    'name' =>array(

      'en'=>'Spruce Fence Gate',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Spruce_Fence_Gate.png'),

  184=>array(

    'name' =>array(

      'en'=>'Birch Fence Gate',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Birch_Fence_Gate.png'),

  185=>array(

    'name' =>array(

      'en'=>'Jungle Fence Gate',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Jungle_Fence_Gate.png'),

  186=>array(

    'name' =>array(

      'en'=>'Dark Oak Fence Gate',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Dark_Oak_Fence_Gate.png'),

  187=>array(

    'name' =>array(

      'en'=>'Acacia Fence Gate',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Acacia_Fence_Gate.png'),

  188=>array(

    'name' =>array(

      'en'=>'Spruce Fence',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Spruce_Fence.png'),

  189=>array(

    'name' =>array(

      'en'=>'Birch Fence',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Birch_Fence.png'),

  190=>array(

    'name' =>array(

      'en'=>'Jungle Fence',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Jungle_Fence.png'),

  191=>array(

    'name' =>array(

      'en'=>'Dark Oak Fence',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Dark_Oak_Fence.png'),

  192=>array(

    'name' =>array(

      'en'=>'Acacia Fence',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Acacia_Fence.png'),

  256=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Shovel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Shovel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>264,

    'icon' =>'Iron_Shovel.png',

    'damage'=>251,

    'stack'=>1),

  257=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Pickaxe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Pickaxe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>776,

    'icon' =>'Iron_Pickaxe.png',

    'damage'=>251,

    'stack'=>1),

  258=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Axe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Axe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>776,

    'icon' =>'Iron_Axe.png',

    'damage'=>251,

    'stack'=>1),

  259=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Flint and Steel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Flint and Steel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>260,

    'icon' =>'Flint_and_Steel.png',

    'damage'=>65,

    'stack'=>1),

  260=>array(

    'name'=>array(

      'en'=>'Apple',

      ''=>'',

      ''=>''),

    'emc'=>128,

    'icon'=>'Apple_Red.png'),

  261=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Bow',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Bow %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>48,

    'icon' =>'Bow.png',

    'damage'=>385,

    'stack'=>1),

  262=>array(

    'name'=>array(

      'en'=>'Arrow',

      ''=>'',

      ''=>''),

    'emc'=>14,

    'icon'=>'Arrow.png'),

  263=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Coal',

        ''=>'',

        ''=>''),

      'emc'=>128,

      'icon'=>'Coal_Item.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Charcoal',

        ''=>'',

        ''=>''),

      'emc'=>32,

      'icon'=>'Charcoal_Item.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Coal',

        ''=>'',

        ''=>''),

      'icon'=>'Coal_Item.png'),

  ),

  264=>array(

    'name'=>array(

      'en'=>'Diamond',

      ''=>'',

      ''=>''),

    'emc'=>8192,

    'icon'=>'Diamond_Gem.png'),

  265=>array(

    'name'=>array(

      'en'=>'Iron Ingot',

      ''=>'',

      ''=>''),

    'emc'=>256,

    'icon'=>'Iron_Ingot.png'),

  266=>array(

    'name'=>array(

      'en'=>'Gold Ingot',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Gold_Ingot.png'),

  267=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Sword',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Sword %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>516,

    'icon' =>'Iron_Sword.png',

    'damage'=>251,

    'stack'=>1),

  268=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Wooden Sword',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Wooden Sword %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>20,

    'icon' =>'Wooden_Sword.png',

    'damage'=>60,

    'stack'=>1),

  269=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Wooden Shovel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Wooden Shovel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon' =>'Wooden_Shovel.png',

    'damage'=>60,

    'stack'=>1),

  270=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Wooden Pickaxe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Wooden Pickaxe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon' =>'Wooden_Pickaxe.png',

    'damage'=>60,

    'stack'=>1),

  271=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Wooden Axe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Wooden Axe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon' =>'Wooden_Axe.png',

    'damage'=>60,

    'stack'=>1),

  272=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Stone Sword',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Stone Sword %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>6,

    'icon' =>'Stone_Sword.png',

    'damage'=>132,

    'stack'=>1),

  273=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Stone Shovel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Stone Shovel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>9,

    'icon' =>'Stone_Shovel.png',

    'damage'=>132,

    'stack'=>1),

  274=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Stone Pickaxe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Stone Pickaxe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>11,

    'icon' =>'Stone_Pickaxe.png',

    'damage'=>132,

    'stack'=>1),

  275=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Stone Axe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Stone Axe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>11,

    'icon' =>'Stone_Axe.png',

    'damage'=>132,

    'stack'=>1),

  276=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Sword',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Sword %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>16388,

    'icon' =>'Diamond_Sword.png',

    'damage'=>1562,

    'stack'=>1),

  277=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Shovel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Shovel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>8200,

    'icon' =>'Diamond_Shovel.png',

    'damage'=>1562,

    'stack'=>1),

  278=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Pickaxe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Pickaxe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>24584,

    'icon' =>'Diamond_Pickaxe.png',

    'damage'=>1562,

    'stack'=>1),

  279=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Axe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Axe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>24584,

    'icon' =>'Diamond_Axe.png',

    'damage'=>1562,

    'stack'=>1),

  280=>array(

    'name'=>array(

      'en'=>'Stick',

      ''=>'',

      ''=>''),

    'emc'=>4,

    'icon'=>'Stick.png'),

  281=>array(

    'name'=>array(

      'en'=>'Bowl',

      ''=>'',

      ''=>''),

    'emc'=>6,

    'icon'=>'Bowl.png'),

  282=>array(

    'name'=>array(

      'en'=>'Mushroom Soup',

      ''=>'',

      ''=>''),

    'emc'=>70,

    'icon'=>'Mushroom_Stew.png',

    'stack'=>1),

  283=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Sword',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Sword %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>4100,

    'icon' =>'Gold_Sword.png',

    'damage'=>33,

    'stack'=>1),

  284=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Shovel',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Shovel %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>2056,

    'icon' =>'Gold_Shovel.png',

    'damage'=>33,

    'stack'=>1),

  285=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Pickaxe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Pickaxe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>6152,

    'icon' =>'Gold_Pickaxe.png',

    'damage'=>33,

    'stack'=>1),

  286=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Axe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Axe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>6152,

    'icon' =>'Gold_Axe.png',

    'damage'=>33,

    'stack'=>1),

  287=>array(

    'name'=>array(

      'en'=>'String',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'String.png'),

  288=>array(

    'name'=>array(

      'en'=>'Feather',

      ''=>'',

      ''=>''),

    'emc'=>48,

    'icon'=>'Feather.png'),

  289=>array(

    'name'=>array(

      'en'=>'Gunpowder',

      ''=>'',

      ''=>''),

    'emc'=>192,

    'icon'=>'Gunpowder.png'),

  290=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Wooden Hoe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Wooden Hoe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon' =>'Wooden_Hoe.png',

    'damage'=>60,

    'stack'=>1),

  291=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Stone Hoe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Stone Hoe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>10,

    'icon' =>'Stone_Hoe.png',

    'damage'=>132,

    'stack'=>1),

  292=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Hoe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Hoe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>520,

    'icon' =>'Iron_Hoe.png',

    'damage'=>251,

    'stack'=>1),

  293=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Hoe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Hoe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>16392,

    'icon' =>'Diamond_Hoe.png',

    'damage'=>1562,

    'stack'=>1),

  294=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Hoe',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Hoe %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>4104,

    'icon' =>'Gold_Hoe.png',

    'damage'=>33,

    'stack'=>1),

  295=>array(

    'name'=>array(

      'en'=>'Wheat Seeds',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Seeds_Wheat.png'),

  296=>array(

    'name'=>array(

      'en'=>'Wheat',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon'=>'Wheat.png'),

  297=>array(

    'name'=>array(

      'en'=>'Bread',

      ''=>'',

      ''=>''),

    'emc'=>72,

    'icon'=>'Bread.png'),

  298=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Leather Cap',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Leather Cap %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>320,

    'icon' =>'Leather_Helmet.png',

    'damage'=>56,

    'stack'=>1),

  299=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Leather Chestplate',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Leather Chestplate %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>512,

    'icon' =>'Leather_Chestplate.png',

    'damage'=>81,

    'stack'=>1),

  300=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Leather Leggings',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Leather Leggings %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>448,

    'icon' =>'Leather_Pants.png',

    'damage'=>76,

    'stack'=>1),

  301=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Leather Boots',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Leather Boots %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>256,

    'icon' =>'Leather_Boots.png',

    'damage'=>66,

    'stack'=>1),

  302=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Chain Mail Helmet',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Chain Mail Helmet %damaged%',

      ''=>'',

      ''=>''),

    'icon' =>'Chain_Armor_Helmet.png',

    'damage'=>166,

    'stack'=>1),

  303=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Chain Mail Chestplate',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Chain Mail Chestplate %damaged%',

      ''=>'',

      ''=>''),

    'icon' =>'Chain_Armor_Chestplate.png',

    'damage'=>241,

    'stack'=>1),

  304=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Chain Mail Leggings',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Chain Mail Leggings %damaged%',

      ''=>'',

      ''=>''),

    'icon' =>'Chain_Armor_Leggings.png',

    'damage'=>226,

    'stack'=>1),

  305=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Chain Mail Boots',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Chain Mail Boots %damaged%',

      ''=>'',

      ''=>''),

    'icon' =>'Chain_Armor_Boots.png',

    'damage'=>196,

    'stack'=>1),

  306=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Helmet',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Helmet %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>1280,

    'icon' =>'Iron_Helmet.png',

    'damage'=>166,

    'stack'=>1),

  307=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Chestplate',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Chestplate %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon' =>'Iron_Chestplate.png',

    'damage'=>241,

    'stack'=>1),

  308=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Leggings',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Leggings %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>1792,

    'icon' =>'Iron_Leggings.png',

    'damage'=>226,

    'stack'=>1),

  309=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Iron Boots',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Iron Boots %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>1024,

    'icon' =>'Iron_Boots.png',

    'damage'=>196,

    'stack'=>1),

  310=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Helmet',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Helmet %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>40960,

    'icon' =>'Diamond_Helmet.png',

    'damage'=>364,

    'stack'=>1),

  311=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Chestplate',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Chestplate %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>65536,

    'icon' =>'Diamond_Chestplate.png',

    'damage'=>529,

    'stack'=>1),

  312=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Leggings',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Leggings %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>57344,

    'icon' =>'Diamond_Leggings.png',

    'damage'=>496,

    'stack'=>1),

  313=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Diamond Boots',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Diamond Boots %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>32768,

    'icon' =>'Diamond_Boots.png',

    'damage'=>430,

    'stack'=>1),

  314=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Helmet',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Helmet %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>10240,

    'icon' =>'Gold_Helmet.png',

    'damage'=>78,

    'stack'=>1),

  315=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Chestplate',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Chestplate %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>16384,

    'icon' =>'Gold_Chestplate.png',

    'damage'=>113,

    'stack'=>1),

  316=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Leggings',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Leggings %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>14336,

    'icon' =>'Gold_Leggings.png',

    'damage'=>106,

    'stack'=>1),

  317=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Gold Boots',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Gold Boots %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>8192,

    'icon' =>'Gold_Boots.png',

    'damage'=>92,

    'stack'=>1),

  318=>array(

    'name'=>array(

      'en'=>'Flint',

      ''=>'',

      ''=>''),

    'emc'=>4,

    'icon'=>'Flint.png'),

  319=>array(

    'name'=>array(

      'en'=>'Raw Porkchop',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Porkchop_Raw.png'),

  320=>array(

    'name'=>array(

      'en'=>'Cooked Porkchop',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Porkchop_Cooked.png'),

  321=>array(

    'name'=>array(

      'en'=>'Painting',

      ''=>'',

      ''=>''),

    'emc'=>80,

    'icon'=>'Painting.png'),

  322=>array(

    'name'=>array(

      'en'=>'Golden Apple',

      ''=>'',

      ''=>''),

    'emc'=>1944,

    'icon'=>'Apple_Golden.png'),

  323=>array(

    'name'=>array(

      'en'=>'Sign',

      ''=>'',

      ''=>''),

    'emc'=>52,

    'icon'=>'Sign.png',

    'stack'=>16),

  324=>array(

    'name'=>array(

      'en'=>'Oak Door',

      ''=>'',

      ''=>''),

    'emc'=>48,

    'icon'=>'Door_Wood.png',

    'stack'=>1),

  325=>array(

    'name'=>array(

      'en'=>'Bucket',

      ''=>'',

      ''=>''),

    'emc'=>768,

    'icon'=>'Bucket.png',

    'stack'=>16),

  326=>array(

    'name'=>array(

      'en'=>'Bucket of Water',

      ''=>'',

      ''=>''),

    'emc'=>769,

    'icon'=>'Bucket_Water.png',

    'stack'=>1),

  327=>array(

    'name'=>array(

      'en'=>'Bucket of Lava',

      ''=>'',

      ''=>''),

    'emc'=>832,

    'icon'=>'Bucket_Lava.png',

    'stack'=>1),

  328=>array(

    'name'=>array(

      'en'=>'Minecart',

      ''=>'',

      ''=>''),

    'emc'=>1280,

    'icon'=>'Minecart.png',

    'stack'=>1),

  329=>array(

    'name'=>array(

      'en'=>'Saddle',

      ''=>'',

      ''=>''),

    'emc'=>192,

    'icon'=>'Saddle.png',

    'stack'=>1),

  330=>array(

    'name'=>array(

      'en'=>'Iron Door',

      ''=>'',

      ''=>''),

    'emc'=>1536,

    'icon'=>'Door_Iron.png',

    'stack'=>1),

  331=>array(

    'name'=>array(

      'en'=>'Redstone',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Redstone_Dust.png'),

  332=>array(

    'name'=>array(

      'en'=>'Snowball',

      ''=>'',

      ''=>''),

    'icon'=>'Snowball.png',

    'stack'=>16),

  333=>array(

    'name'=>array(

      'en'=>'Boat',

      ''=>'',

      ''=>''),

    'emc'=>40,

    'icon'=>'Boat.png',

    'stack'=>1),

  334=>array(

    'name'=>array(

      'en'=>'Leather',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Leather.png'),

  335=>array(

    'name'=>array(

      'en'=>'Bucket of Milk',

      ''=>'',

      ''=>''),

    'emc'=>849,

    'icon'=>'Bucket_Milk.png',

    'stack'=>1),

  336=>array(

    'name'=>array(

      'en'=>'Clay Brick',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Clay_Brick.png'),

  337=>array(

    'name'=>array(

      'en'=>'Clay Balls',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Clay_Item.png'),

  338=>array(

    'name'=>array(

      'en'=>'Sugar Cane',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Sugar_Cane.png'),

  339=>array(

    'name'=>array(

      'en'=>'Paper',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Paper.png'),

  340=>array(

    'name'=>array(

      'en'=>'Book',

      ''=>'',

      ''=>''),

    'emc'=>96,

    'icon'=>'Book.png'),

  341=>array(

    'name'=>array(

      'en'=>'Slimeball',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon'=>'Slimeball.png'),

  342=>array(

    'name'=>array(

      'en'=>'Storage Minecart',

      ''=>'',

      ''=>''),

    'emc'=>1344,

    'icon'=>'Minecart_Storage.png',

    'stack'=>1),

  343=>array(

    'name'=>array(

      'en'=>'Powered Minecart',

      ''=>'',

      ''=>''),

    'emc'=>1288,

    'icon'=>'Minecart_Powered.png',

    'stack'=>1),

  344=>array(

    'name'=>array(

      'en'=>'Egg',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Egg.png',

    'stack'=>16),

  345=>array(

    'name'=>array(

      'en'=>'Compass',

      ''=>'',

      ''=>''),

    'emc'=>1088,

    'icon'=>'Compass.png'),

  346=>array(

    'type' =>'tool',

    'name'=>array(

      'en'=>'Fishing Rod',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Fishing Rod %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>12,

    'icon'=>'Fishing_Rod.png',

    'damage'=>65,

    'stack'=>1),

  347=>array(

    'name'=>array(

      'en'=>'Clock',

      ''=>'',

      ''=>''),

    'emc'=>8256,

    'icon'=>'Clock.png'),

  348=>array(

    'name'=>array(

      'en'=>'Glowstone Dust',

      ''=>'',

      ''=>''),

    'emc'=>384,

    'icon'=>'Glowstone_Dust.png'),

  349=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Raw Fish',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Fish_Raw.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Raw Salmon',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Raw_Salmon.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Clownfish',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Fish_Clownfish.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Pufferfish',

        ''=>'',

        ''=>''),

      'emc'=>128,

      'icon'=>'Fish_Pufferfish.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Raw Fish',

        ''=>'',

        ''=>''),

      'icon'=>'Fish_Raw.png'),

	),

  350=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Cooked Fish',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Fish_Cooked.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Cooked Salmon',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Fish_Cooked_Salmon.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Cooked Fish',

        ''=>'',

        ''=>''),

      'icon'=>'Fish_Cooked.png'),

	),

  351=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Ink Sack',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Black.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Rose Red',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Red.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Cactus Green',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Green.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Cocoa Beans',

        ''=>'',

        ''=>''),

      'emc'=>128,

      'icon'=>'Cocoa_Beans.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Lapis Lazuli',

        ''=>'',

        ''=>''),

      'emc'=>864,

      'icon'=>'Lapis_Lazuli_Dye.png'),

    5 =>array(

      'name'=>array(

        'en'=>'Purple Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Purple.png'),

    6 =>array(

      'name'=>array(

        'en'=>'Cyan Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Cyan.png'),

    7 =>array(

      'name'=>array(

        'en'=>'Light Grey Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Light_Gray.png'),

    8 =>array(

      'name'=>array(

        'en'=>'Grey Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Gray.png'),

    9 =>array(

      'name'=>array(

        'en'=>'Pink Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Pink.png'),

    10=>array(

      'name'=>array(

        'en'=>'Lime Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Lime.png'),

    11=>array(

      'name'=>array(

        'en'=>'Dandelion Yellow',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Yellow.png'),

    12=>array(

      'name'=>array(

        'en'=>'Light Blue Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Light_Blue.png'),

    13=>array(

      'name'=>array(

        'en'=>'Magenta Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Magenta.png'),

    14=>array(

      'name'=>array(

        'en'=>'Orange Dye',

        ''=>'',

        ''=>''),

      'emc'=>8,

      'icon'=>'Dye_Orange.png'),

    15=>array(

      'name'=>array(

        'en'=>'Bone Meal',

        ''=>'',

        ''=>''),

      'emc'=>48,

      'icon'=>'Bone_Meal.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Dye',

        ''=>'',

        ''=>''),

      'icon'=>'Bone_Meal.png'),

  ),

  352=>array(

    'name'=>array(

      'en'=>'Bone',

      ''=>'',

      ''=>''),

    'emc'=>144,

    'icon'=>'Bone.png'),

  353=>array(

    'name'=>array(

      'en'=>'Sugar',

      ''=>'',

      ''=>''),

    'emc'=>32,

    'icon'=>'Sugar.png'),

  354=>array(

    'name'=>array(

      'en'=>'Cake',

      ''=>'',

      ''=>''),

    'emc'=>411,

    'icon'=>'Cake.png',

    'stack'=>1),

  355=>array(

    'name'=>array(

      'en'=>'Bed',

      ''=>'',

      ''=>''),

    'emc'=>144,

    'icon'=>'Bed.png',

    'stack'=>1),

  356=>array(

    'name'=>array(

      'en'=>'Redstone Repeater',

      ''=>'',

      ''=>''),

    'emc'=>203,

    'icon'=>'Redstone_Repeater.png'),

  357=>array(

    'name'=>array(

      'en'=>'Cookie',

      ''=>'',

      ''=>''),

    'emc'=>22,

    'icon'=>'Cookie.png'),

  358=>array(

    'type' =>'map',

    'name' =>array(

      'en'=>'Map #map#',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Map #map#',

      ''=>'',

      ''=>''),

    'emc'=>1344,

    'icon' =>'Map_Item.png',

    'stack'=>1),

  359=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Shears',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Shears %damaged%',

      ''=>'',

      ''=>''),

    'emc'=>512,

    'icon' =>'Shears.png',

    'damage'=>238,

    'stack'=>1),

  360=>array(

    'name'=>array(

      'en'=>'Melon Slice',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Melon_Slice.png'),

  361=>array(

    'name'=>array(

      'en'=>'Pumpkin Seeds',

      ''=>'',

      ''=>''),

    'emc'=>36,

    'icon'=>'Seeds_Pumpkin.png'),

  362=>array(

    'name'=>array(

      'en'=>'Melon Seeds',

      ''=>'',

      ''=>''),

    'emc'=>16,

    'icon'=>'Seeds_Melon.png'),

  363=>array(

    'name'=>array(

      'en'=>'Raw Beef',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Beef_Raw.png'),

  364=>array(

    'name'=>array(

      'en'=>'Steak',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Beef_Cooked.png'),

  365=>array(

    'name'=>array(

      'en'=>'Raw Chicken',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Chicken_Raw.png'),

  366=>array(

    'name'=>array(

      'en'=>'Cooked Chicken',

      ''=>'',

      ''=>''),

    'emc'=>64,

    'icon'=>'Chicken_Cooked.png'),

  367=>array(

    'name'=>array(

      'en'=>'Rotten Flesh',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon'=>'Rotten_Flesh.png'),

  368=>array(

    'name'=>array(

      'en'=>'Ender Pearl',

      ''=>'',

      ''=>''),

    'emc'=>1024,

    'icon'=>'Ender_Pearl.png',

    'stack'=>16),

  369=>array(

    'name'=>array(

      'en'=>'Blaze Rod',

      ''=>'',

      ''=>''),

    'emc'=>1536,

    'icon'=>'Blaze_Rod.png'),

  370=>array(

    'name'=>array(

      'en'=>'Ghast Tear',

      ''=>'',

      ''=>''),

    'emc'=>4096,

    'icon'=>'Ghast_Tear.png'),

  371=>array(

    'name'=>array(

      'en'=>'Gold Nugget',

      ''=>'',

      ''=>''),

    'emc'=>227,

    'icon'=>'Gold_Nugget.png'),

  372=>array(

    'name'=>array(

      'en'=>'Nether Wart',

      ''=>'',

      ''=>''),

    'emc'=>24,

    'icon'=>'Seeds_Nether_Wart.png'),

  // potions

  373=>array(

    0    =>array(

      'name'=>array(

        'en'=>'Bottle of Water',

        ''=>'',

        ''=>''),

      'icon'=>'Bottle_Water.png',

      'stack'=>1),

    16   =>array(

      'name'=>array(

        'en'=>'Awkward Potion',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Awkward.png',

      'stack'=>1),

    32   =>array(

      'name'=>array(

        'en'=>'Thick Potion',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Thick.png',

      'stack'=>1),

    64   =>array(

      'name'=>array(

        'en'=>'Mundane Potion',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Mundane.png',

      'stack'=>1),

    16384=>array(

      'name'=>array(

        'en'=>'Mundane Splash Potion',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Mundane_Splash.png',

      'stack'=>1),

    // regeneration

    8193 =>array(

      'name'=>array(

        'en'=>'Regeneration (0:45)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration.png',

      'stack'=>1),

    8257 =>array(

      'name'=>array(

        'en'=>'Regeneration (2:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration.png',

      'stack'=>1),

    8225 =>array(

      'name'=>array(

        'en'=>'Regeneration II (0:22)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration.png',

      'stack'=>1),

    // regeneration splash

    16385=>array(

      'name'=>array(

        'en'=>'Regeneration Splash (0:33)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration_Splash.png',

      'stack'=>1),

    16449=>array(

      'name'=>array(

        'en'=>'Regeneration Splash (1:30)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration_Splash.png',

      'stack'=>1),

    16417=>array(

      'name'=>array(

        'en'=>'Regeneration Splash II (0:16)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Regeneration_Splash.png',

      'stack'=>1),

    // speed

    8194 =>array(

      'name'=>array(

        'en'=>'Speed Potion (3:00) +20% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed.png',

      'stack'=>1),

    8226 =>array(

      'name'=>array(

        'en'=>'Speed Potion II (1:30) +40% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed.png',

      'stack'=>1),

    8258 =>array(

      'name'=>array(

        'en'=>'Speed Potion Extended (8:00) +20% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed.png',

      'stack'=>1),

    // speed splash

    16386=>array(

      'name'=>array(

        'en'=>'Speed Splash Potion (2:15) +20% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed_Splash.png',

      'stack'=>1),

    16418=>array(

      'name'=>array(

        'en'=>'Speed Splash Potion II (1:07) +40% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed_Splash.png',

      'stack'=>1),

    16450=>array(

      'name'=>array(

        'en'=>'Speed Splash Potion Extended (6:00) +20% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Speed_Splash.png',

      'stack'=>1),

    // fire resistance

    8195 =>array(

      'name'=>array(

        'en'=>'Fire Resistance Potion (3:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Fire_Resistance.png',

      'stack'=>1),

    8259 =>array(

      'name'=>array(

        'en'=>'Fire Resistance Potion (8:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Fire_Resistance.png',

      'stack'=>1),

    // fire resistance splash

    16387=>array(

      'name'=>array(

        'en'=>'Fire Resistance Splash Potion (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Fire_Resistance_Splash.png',

      'stack'=>1),

    16451=>array(

      'name'=>array(

        'en'=>'Fire Resistance Splash Potion (6:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Fire_Resistance_Splash.png',

      'stack'=>1),

    // poisons

    8196 =>array(

      'name'=>array(

        'en'=>'Potion of Poison (0:45)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison.png',

      'stack'=>1),

    8260 =>array(

      'name'=>array(

        'en'=>'Potion of Poison (2:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison.png',

      'stack'=>1),

    8228 =>array(

      'name'=>array(

        'en'=>'Potion of Poison II (0:22)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison.png',

      'stack'=>1),

    8204 =>array(

      'name'=>array(

        'en'=>'Instant Damage',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Harming.png',

      'stack'=>1),

    8236 =>array(

      'name'=>array(

        'en'=>'Instant Damage II',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Harming.png',

      'stack'=>1),

    // poison splash

    16388=>array(

      'name'=>array(

        'en'=>'Splash Potion of Poison (0:33)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison_Splash.png',

      'stack'=>1),

    16452=>array(

      'name'=>array(

        'en'=>'Splash Potion of Poison (1:30)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison_Splash.png',

      'stack'=>1),

    16420=>array(

      'name'=>array(

        'en'=>'Splash Potion of Poison II (0:16)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Poison_Splash.png',

      'stack'=>1),

    16396=>array(

      'name'=>array(

        'en'=>'Instant Damage Splash',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Harming_Splash.png',

      'stack'=>1),

    16428=>array(

      'name'=>array(

        'en'=>'Instant Damage Splash II',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Harming_Splash.png',

      'stack'=>1),

    // healing

    8197 =>array(

      'name'=>array(

        'en'=>'Instant Health',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Healing.png',

      'stack'=>1),

    8229 =>array(

      'name'=>array(

        'en'=>'Instant Health II',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Instant_Health.png',

      'stack'=>1),

    // healing splash

    16389=>array(

      'name'=>array(

        'en'=>'Instant Health Splash',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Healing_Splash.png',

      'stack'=>1),

    16421=>array(

      'name'=>array(

        'en'=>'Instant Health Splash II',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Instant_Health_Splash.png',

      'stack'=>1),

    // weakness

    8200 =>array(

      'name'=>array(

        'en'=>'Potion of Weakness (1:30) -0.5 attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Weakness.png',

      'stack'=>1),

    8264 =>array(

      'name'=>array(

        'en'=>'Potion of Weakness (4:00) -0.5 attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Weakness.png',

      'stack'=>1),

    // weakness splash

    16392=>array(

      'name'=>array(

        'en'=>'Splash Potion of Weakness (1:07) -0.5 attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Weakness_Splash.png',

      'stack'=>1),

    16456=>array(

      'name'=>array(

        'en'=>'Splash Potion of Weakness (3:00) -0.5 attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Weakness_Splash.png',

      'stack'=>1),

    // strength

    8201 =>array(

      'name'=>array(

        'en'=>'Strength (3:00) +130% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength.png',

      'stack'=>1),

    8233 =>array(

      'name'=>array(

        'en'=>'Strength II (1:30) +260% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength.png',

      'stack'=>1),

    8265 =>array(

      'name'=>array(

        'en'=>'Strength Extended (8:00) +130% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength.png',

      'stack'=>1),

    // strength splash

    16393=>array(

      'name'=>array(

        'en'=>'Splash of Strength (2:15) +130% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength_Splash.png',

      'stack'=>1),

    16425=>array(

      'name'=>array(

        'en'=>'Splash of Strength II (1:07) +260% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength_Splash.png',

      'stack'=>1),

    16457=>array(

      'name'=>array(

        'en'=>'Splash of Strength Extended (6:00) +130% attack',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Strength_Splash.png',

      'stack'=>1),

    // slowness

    8202 =>array(

      'name'=>array(

        'en'=>'Slowness Potion (1:30) -15% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Slowness.png',

      'stack'=>1),

    8266 =>array(

      'name'=>array(

        'en'=>'Slowness Potion Extended (4:00) -15% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Slowness.png',

      'stack'=>1),

    // slowness splash

    16394=>array(

      'name'=>array(

        'en'=>'Slowness Splash Potion (1:07) -15% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Slowness_Splash.png',

      'stack'=>1),

    16458=>array(

      'name'=>array(

        'en'=>'Slowness Splash Potion Extended (3:00) -15% speed',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Slowness_Splash.png',

      'stack'=>1),

    // water breathing

    8205 =>array(

      'name'=>array(

        'en'=>'Water Breathing (3:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_of_Water_Breathing.png',

      'stack'=>1),

    8269 =>array(

      'name'=>array(

        'en'=>'Water Breathing (8:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_of_Water_Breathing.png',

      'stack'=>1),

    // water breathing splash

    16397=>array(

      'name'=>array(

        'en'=>'Splash of Water Breathing (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_of_Water_Breathing_Splash.png',

      'stack'=>1),

    16461=>array(

      'name'=>array(

        'en'=>'Splash of Water Breathing (6:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_of_Water_Breathing_Splash.png',

      'stack'=>1),

    // invisibility

    8206 =>array(

      'name'=>array(

        'en'=>'Potion of Invisibility (3:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Invisibility.png',

      'stack'=>1),

    8270 =>array(

      'name'=>array(

        'en'=>'Potion of Invisibility (8:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Invisibility.png',

      'stack'=>1),

    // invisibility splash

    16398=>array(

      'name'=>array(

        'en'=>'Splash Potion of Invisibility (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Invisibility_Splash.png',

      'stack'=>1),

    16462=>array(

      'name'=>array(

        'en'=>'Splash Potion of Invisibility (6:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Invisibility_Splash.png',

      'stack'=>1),

    // night vision

    8198 =>array(

      'name'=>array(

        'en'=>'Potion of Night Vision (3:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Night_Vision.png',

      'stack'=>1),

    8262 =>array(

      'name'=>array(

        'en'=>'Potion of Night Vision (8:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Night_Vision.png',

      'stack'=>1),

    // night vision splash

    16390=>array(

      'name'=>array(

        'en'=>'Splash Potion of Night Vision (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Night_Vision_Splash.png',

      'stack'=>1),

    16454=>array(

      'name'=>array(

        'en'=>'Splash Potion of Night Vision (6:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Night_Vision_Splash.png',

      'stack'=>1),

    // leaping

    8203 =>array(

      'name'=>array(

        'en'=>'Potion of Leaping (3:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping.png',

      'stack'=>1),

    8267 =>array(

      'name'=>array(

        'en'=>'Potion of Leaping (8:00)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping.png',

      'stack'=>1),

    8235 =>array(

      'name'=>array(

        'en'=>'Potion of Leaping II (1:30)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping.png',

      'stack'=>1),

    // leaping splash

    16395=>array(

      'name'=>array(

        'en'=>'Splahs Potion of Leaping (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping_Splash.png',

      'stack'=>1),

    16427=>array(

      'name'=>array(

        'en'=>'Splahs Potion of Leaping II (1:07)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping_Splash.png',

      'stack'=>1),

    16459=>array(

      'name'=>array(

        'en'=>'Splahs Potion of Leaping (2:15)',

        ''=>'',

        ''=>''),

      'icon'=>'Potion_Leaping_Splash.png',

      'stack'=>1),

    -1   =>array(

      'name'=>array(

        'en'=>'Unknown Potion',

        ''=>'',

        ''=>''),

      'icon'=>'Bottle_Water.png',

      'stack'=>1),

  ),

  374=>array(

    'name'=>array(

      'en'=>'Glass Bottle',

      ''=>'',

      ''=>''),

    'emc'=>1,

    'icon'=>'Bottle_Glass.png'),

  375=>array(

    'name'=>array(

      'en'=>'Spider Eye',

      ''=>'',

      ''=>''),

    'emc'=>128,

    'icon'=>'Spider_Eye.png'),

  376=>array(

    'name'=>array(

      'en'=>'Fermented Spider Eye',

      ''=>'',

      ''=>''),

    'emc'=>192,

    'icon'=>'Fermented_Spider_Eye.png'),

  377=>array(

    'name'=>array(

      'en'=>'Blaze Powder',

      ''=>'',

      ''=>''),

    'emc'=>768,

    'icon'=>'Blaze_Powder.png'),

  378=>array(

    'name'=>array(

      'en'=>'Magma Cream',

      ''=>'',

      ''=>''),

    'emc'=>792,

    'icon'=>'Magma_Cream.png'),

  379=>array(

    'name'=>array(

      'en'=>'Brewing Stand',

      ''=>'',

      ''=>''),

    'icon'=>'Brewing_Stand.png'),

  380=>array(

    'name'=>array(

      'en'=>'Cauldron',

      ''=>'',

      ''=>''),

    'icon'=>'Cauldron.png'),

  381=>array(

    'name'=>array(

      'en'=>'Eye of Ender',

      ''=>'',

      ''=>''),

    'emc'=>1792,

    'icon'=>'Eye_of_Ender.png'),

  382=>array(

    'name'=>array(

      'en'=>'Glistering Melon (Slice)',

      ''=>'',

      ''=>''),

    'emc'=>243,

    'icon'=>'Melon_Glistering.png'),

  383=>array(

    50 =>array(

      'name'=>array(

        'en'=>'Spawn Creeper',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Creeper.png'),

    51 =>array(

      'name'=>array(

        'en'=>'Spawn Skeleton',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Skeleton.png'),

    52 =>array(

      'name'=>array(

        'en'=>'Spawn Spider',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Spider.png'),

    54 =>array(

      'name'=>array(

        'en'=>'Spawn Zombie',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Zombie.png'),

    55 =>array(

      'name'=>array(

        'en'=>'Spawn Slime',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Slime.png'),

    56 =>array(

      'name'=>array(

        'en'=>'Spawn Ghast',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Ghast.png'),

    57 =>array(

      'name'=>array(

        'en'=>'Spawn Pig Zombie',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Pig_Zombie.png'),

    58 =>array(

      'name'=>array(

        'en'=>'Spawn Enderman',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Enderman.png'),

    59 =>array(

      'name'=>array(

        'en'=>'Spawn Cave_Spider',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Cave_Spider.png'),

    60 =>array(

      'name'=>array(

        'en'=>'Spawn Silverfish',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Silverfish.png'),

    61 =>array(

      'name'=>array(

        'en'=>'Spawn Blaze',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Blaze.png'),

    62 =>array(

      'name'=>array(

        'en'=>'Spawn Magma Cube',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Magma_Cube.png'),

    65 =>array(

      'name'=>array(

        'en'=>'Spawn Bat',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Bat.png'),

    66 =>array(

      'name'=>array(

        'en'=>'Spawn Witch',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Witch.png'),

    67 =>array(

      'name'=>array(

        'en'=>'Spawn Endermite',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Endermite.png'),

    68 =>array(

      'name'=>array(

        'en'=>'Spawn Guardian',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Guardian.png'),

    90 =>array(

      'name'=>array(

        'en'=>'Spawn Pig',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Pig.png'),

    91 =>array(

      'name'=>array(

        'en'=>'Spawn Sheep',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Sheep.png'),

    92 =>array(

      'name'=>array(

        'en'=>'Spawn Cow',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Cow.png'),

    93 =>array(

      'name'=>array(

        'en'=>'Spawn Chicken',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Chicken.png'),

    94 =>array(

      'name'=>array(

        'en'=>'Spawn Squid',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Squid.png'),

    95 =>array(

      'name'=>array(

        'en'=>'Spawn Wolf',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Wolf.png'),

    96 =>array(

      'name'=>array(

        'en'=>'Spawn Mooshroom',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Mooshroom.png'),

    98 =>array(

      'name'=>array(

        'en'=>'Spawn Ocelot',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Ocelot.png'),

    100=>array(

      'name'=>array(

        'en'=>'Spawn Horse',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Horse.png'),

    101=>array(

      'name'=>array(

        'en'=>'Spawn Rabbit',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Rabbit.png'),

    120=>array(

      'name'=>array(

        'en'=>'Spawn Villager',

        ''=>'',

        ''=>''),

      'icon'=>'Spawn_Villager.png'),

    -1 =>array(

      'name'=>array(

        'en'=>'Unknown Spawn Egg',

        ''=>'',

        ''=>''),

      'icon'=>'Egg.png'),

  ),

  384=>array(

    'name'=>array(

      'en'=>'Bottle o\' Enchanting',

      ''=>'',

      ''=>''),

    'icon'=>'Bottle_o_Enchanting.png'),

  385=>array(

    'name'=>array(

      'en'=>'Fire Charge',

      ''=>'',

      ''=>''),

    'emc'=>298,

    'icon'=>'Fire_Charge.png'),

  386=>array(

    'name'=>array(

      'en'=>'Book and Quill',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Book_and_Quill.png',

    'stack'=>1),

  387=>array(

    'name'=>array(

      'en'=>'Written Book',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Book_Written.png',

    'stack'=>1),

  388=>array(

    'name'=>array(

      'en'=>'Emerald',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Emerald.png'),

  389=>array(

    'name'=>array(

      'en'=>'Item Frame',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Item_Frame.png'),

  390=>array(

    'name'=>array(

      'en'=>'Flower Pot',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Flower_Pot.png'),

  391=>array(

    'name'=>array(

      'en'=>'Carrot',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Carrot.png'),

  392=>array(

    'name'=>array(

      'en'=>'Potato',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Potato.png'),

  393=>array(

    'name'=>array(

      'en'=>'Baked Potato',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Potato_Baked.png'),

  394=>array(

    'name'=>array(

      'en'=>'Poisonous Potato',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Potato_Poisonous.png'),

  395=>array(

    'name'=>array(

      'en'=>'Empty Map',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Map_Empty.png'),

  396=>array(

    'name'=>array(

      'en'=>'Golden Carrot',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Carrot_Golden.png'),

  397=>array(

    0 =>array(

      'name'=>array(

        'en'=>'Skeleton Skull',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Head_Skeleton.png'),

    1 =>array(

      'name'=>array(

        'en'=>'Wither Skeleton Skull',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Head_Wither.png'),

    2 =>array(

      'name'=>array(

        'en'=>'Zombie Head',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Head_Zombie.png'),

    3 =>array(

      'name'=>array(

        'en'=>'Head',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Head_Human.png'),

    4 =>array(

      'name'=>array(

        'en'=>'Creeper Head',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Head_Creeper.png'),

    -1=>array(

      'name'=>array(

        'en'=>'Unknown Skull',

        ''=>'',

        ''=>''),

      'icon'=>'Head_Skeleton.png'),

  ),

  398=>array(

    'name'=>array(

      'en'=>'Carrot on a Stick',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Carrot_on_a_Stick.png',

    'stack'=>1),

  399=>array(

    'name'=>array(

      'en'=>'Nether Star',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Nether_Star.png'),

  400=>array(

    'name'=>array(

      'en'=>'Pumpkin Pie',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon'=>'Pie_Pumpkin.png'),

  402=>array(

    'name'=>array(

      'en'=>'Firework Star',

      ''=>'',

      ''=>''),

    'icon'=>'Firework_Star.png'),

  403=>array(

    'type' =>'tool',

    'name' =>array(

      'en'=>'Enchanted Book',

      ''=>'',

      ''=>''),

    'title'=>array(

      'en'=>'Enchanted Book',

      ''=>'',

      ''=>''),

    'emc'=>0,

    'icon' =>'Book_Enchanted.png',

    'damage'=>0,

    'stack'=>1),

  404=>array(

    'name' =>array(

      'en'=>'Redstone Comparator',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Redstone_Comparator.png'),

  405=>array(

    'name' =>array(

      'en'=>'Nether Brick (Item)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Nether_Brick_Item.png'),

  406=>array(

    'name' =>array(

      'en'=>'Nether Quartz',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Nether_Quartz.png'),

  407=>array(

    'name' =>array(

      'en'=>'Minecart (with TNT)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Minecart_TNT.png'),

  408=>array(

    'name' =>array(

      'en'=>'Minecart (with Hopper)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Minecart_Hopper.png'),

  409=>array(

    'name' =>array(

      'en'=>'Prismarine Shard',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Prismarine_Shard.png'),

  410=>array(

    'name' =>array(

      'en'=>'Prismarine Crystals',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Prismarine_Crystals.png'),

  411=>array(

    'name' =>array(

      'en'=>'Raw Rabbit',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Raw_Rabbit.png'),

  412=>array(

    'name' =>array(

      'en'=>'Cooked Rabbit',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Cooked_Rabbit.png'),

  413=>array(

    'name' =>array(

      'en'=>'Rabbit Stew',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Rabbit_Stew.png'),

  414=>array(

    'name' =>array(

      'en'=>'Rabbit Foot',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Rabbit_Foot.png'),

  415=>array(

    'name' =>array(

      'en'=>'Rabbit Hide',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Rabbit_Hide.png'),

  416=>array(

    'name' =>array(

      'en'=>'Aromor Stand',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Armor_Stand.png'),

  417=>array(

    'name' =>array(

      'en'=>'Horse Armor (Iron)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Horse_Armor_Iron.png'),

  418=>array(

    'name' =>array(

      'en'=>'Horse Armor (Gold)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Horse_Armor_Gold.png'),

  419=>array(

    'name' =>array(

      'en'=>'Horse Armor (Diamond)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Horse_Armor_Diamond.png'),

  420=>array(

    'name' =>array(

      'en'=>'Lead',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Lead.png'),

  421=>array(

    'name' =>array(

      'en'=>'Name Tag',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Name_Tag.png'),

  422=>array(

    'name' =>array(

      'en'=>'Minecart (with Command Block)',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Minecart_Command_Block.png'),

  423=>array(

    'name' =>array(

      'en'=>'Raw Mutton',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Raw_Mutton.png'),

  424=>array(

    'name' =>array(

      'en'=>'Cooked Mutton',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Cooked_Mutton.png'),

  425=>array(
  //Nutno predelat barevne banery
    0 =>array(

      'name'=>array(

        'en'=>'Banner',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Banner.png'),
     1 =>array(

      'name'=>array(

        'en'=>'Banner',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Banner.png'),
      2 =>array(

      'name'=>array(

        'en'=>'Banner',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Banner.png'),
      3 =>array(

      'name'=>array(

        'en'=>'Banner',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Banner.png'),
      4 =>array(

      'name'=>array(

        'en'=>'Banner',

        ''=>'',

        ''=>''),

//      'emc'=>,

      'icon'=>'Banner.png')

    ),

  427=>array(

    'name' =>array(

      'en'=>'Spruce Door',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Spruce_Door.png'),

  428=>array(

    'name' =>array(

      'en'=>'Birch Door',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Birch_Door.png'),

  429=>array(

    'name' =>array(

      'en'=>'Jungle Door',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Jungle_Door.png'),

  430=>array(

    'name' =>array(

      'en'=>'Acacia Door',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Acacia_Door.png'),

  431=>array(

    'name' =>array(

      'en'=>'Dark Oak Door',

      ''=>'',

      ''=>''),

//    'emc'=>,

    'icon' =>'Dark_Oak_Door.png'),

  2256=>array(

    'name'=>array(

      'en'=>'Music Disc (13)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Gold.png',

    'stack'=>1),

  2257=>array(

    'name'=>array(

      'en'=>'Music Disc (Cat)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Green.png',

    'stack'=>1),

  2258=>array(

    'name'=>array(

      'en'=>'Music Disc (Blocks)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Blocks.png',

    'stack'=>1),

  2259=>array(

    'name'=>array(

      'en'=>'Music Disc (Chirp)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Chirp.png',

    'stack'=>1),

  2260=>array(

    'name'=>array(

      'en'=>'Music Disc (Far)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Far.png',

    'stack'=>1),

  2261=>array(

    'name'=>array(

      'en'=>'Music Disc (Mall)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Mall.png',

    'stack'=>1),

  2262=>array(

    'name'=>array(

      'en'=>'Music Disc (Mellohi)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Mellohi.png',

    'stack'=>1),

  2263=>array(

    'name'=>array(

      'en'=>'Music Disc (Stal)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Stal.png',

    'stack'=>1),

  2264=>array(

    'name'=>array(

      'en'=>'Music Disc (Strad)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Strad.png',

    'stack'=>1),

  2265=>array(

    'name'=>array(

      'en'=>'Music Disc (Ward)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Ward.png',

    'stack'=>1),

  2266=>array(

    'name'=>array(

      'en'=>'Music Disc (11)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_11.png',

    'stack'=>1),

  2267=>array(

    'name'=>array(

      'en'=>'Music Disc (Wait)',

      ''=>'',

      ''=>''),

    'emc'=>2048,

    'icon'=>'Disc_Wait.png',

    'stack'=>1),

  -1  =>array(

    'name'=>array(

      'en'=>'Unknown %itemid%',

      ''=>'',

      ''=>''),

    'icon'=>'Unknown.png'),

);







$keys = array_keys($items); 
echo "<pre>";
  //print_r($keys);
  echo "<ht>";
 // print_r($items);
echo "</pre>";

// ID
for($i = 0; $i < count($items); $i++){
  //if($keys[$i] == -1)continue;

  //echo "ID: ".$keys[$i];
  $id = $keys[$i];

  //echo $id; 
  //subID
  if($items[$id]['name']['en'] != ""){
    //echo "ani hovnu<br><br>";
    echo "ID: ". $id;
    echo "<br>";
    echo "&nbsp;&nbsp;&nbsp;subID: 0";
    echo "<br>";
    echo "&nbsp;&nbsp;&nbsp;name: ".$items[$id]['name']['en'];
    echo "<br>";
    echo "&nbsp;&nbsp;&nbsp;img: ".$items[$id]['icon'];
    echo "<br>";
    
    DB::query("INSERT INTO `itemy_test` VALUES ($id, 0,'".str_replace("'", "", $items[$id]['name']['en'])."','".$items[$id]['icon']."')");
  }
  else{
    echo "ID: ". $id;
    echo "<br>";
    
    $m = 0;
    foreach($items[$id] as $subhovno){
    $keys2 = array_keys($items[$id]); 
      echo "&nbsp;&nbsp;&nbsp;subID: " . ($keys2[$m]);
      echo "<br>";
      echo "&nbsp;&nbsp;&nbsp;name: ".$subhovno['name']['en'];
       echo "<br>";
      echo "&nbsp;&nbsp;&nbsp;img: ".$subhovno['icon'];
      echo "<br>";  
     DB::query("INSERT INTO `itemy_test` VALUES ($id, $keys2[$m],'".htmlSpecialChars($subhovno['name']['en'])."','".$subhovno['icon']."')");
 
      $m++;
    } 
  }

}

