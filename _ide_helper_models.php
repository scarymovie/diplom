<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Box
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Card[] $prepareCard
 * @property-read int|null $prepare_card_count
 * @property-read \App\Models\User $prepareUser
 * @method static \Illuminate\Database\Eloquent\Builder|Box newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Box newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Box query()
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereUserId($value)
 */
	class Box extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Card
 *
 * @property int $id
 * @property int $box_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\First|null $first
 * @property-read \App\Models\Box $prepareBox
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Second[] $second
 * @property-read int|null $second_count
 * @property-read \App\Models\Third|null $third
 * @method static \Illuminate\Database\Eloquent\Builder|Card newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Card query()
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereBoxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Card whereUpdatedAt($value)
 */
	class Card extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\First
 *
 * @property int $id
 * @property int $card_id
 * @property string $Republic
 * @property string $district
 * @property string $region
 * @property string $quarter
 * @property string|null $distance
 * @property string|null $renter
 * @property string|null $number
 * @property string $area
 * @property string $earthCategory
 * @property string $protectionCategory
 * @property string|null $cutWay
 * @property string|null $ozu
 * @property string|null $height
 * @property string|null $exposition
 * @property string|null $slope
 * @property string|null $erozionForm
 * @property string|null $erozionDegree
 * @property string|null $firstEvent
 * @property string|null $percent
 * @property string|null $firstPtk
 * @property string|null $secondEvent
 * @property string|null $secondPtk
 * @property string|null $thirdEvent
 * @property string|null $thirdPtk
 * @property string|null $target
 * @property string $dominantBreed
 * @property string $bonitetClass
 * @property string $forestType
 * @property string $tlu
 * @property string|null $fireDangeros
 * @property string|null $cutYear
 * @property string|null $allStump
 * @property string|null $pineStump
 * @property string|null $stumpDiameter
 * @property string|null $cutType
 * @property string|null $littering
 * @property string|null $liquid
 * @property string|null $deadwood
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Card $firstcard
 * @method static \Illuminate\Database\Eloquent\Builder|First newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|First newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|First query()
 * @method static \Illuminate\Database\Eloquent\Builder|First whereAllStump($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereBonitetClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereCutType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereCutWay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereCutYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereDeadwood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereDominantBreed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereEarthCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereErozionDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereErozionForm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereExposition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereFireDangeros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereFirstEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereFirstPtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereForestType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereLiquid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereLittering($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereOzu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First wherePineStump($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereProtectionCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereQuarter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereRenter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereRepublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereSecondEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereSecondPtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereSlope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereStumpDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereThirdEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereThirdPtk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereTlu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|First whereUpdatedAt($value)
 */
	class First extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Second
 *
 * @property int $id
 * @property int $card_id
 * @property string $tier
 * @property string $coefComposition
 * @property string $speciesComposition
 * @property string $origin
 * @property int|null $age
 * @property int $height
 * @property int $diameter
 * @property int $class
 * @property int|null $density
 * @property int|null $g
 * @property int|null $stock
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Card $secondcard
 * @method static \Illuminate\Database\Eloquent\Builder|Second newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Second newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Second query()
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereCoefComposition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereDensity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereSpeciesComposition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereTier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Second whereUpdatedAt($value)
 */
	class Second extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Third
 *
 * @property int $id
 * @property int $card_id
 * @property int|null $thousands
 * @property int|null $height
 * @property int|null $age
 * @property int|null $koefOne
 * @property string|null $podrostOne
 * @property int|null $koefTwo
 * @property string|null $podrostTwo
 * @property int|null $koefThree
 * @property string|null $podrostThree
 * @property string|null $por
 * @property string|null $Oc
 * @property string|null $density
 * @property string|null $podlesokOne
 * @property string|null $podlesokTwo
 * @property string|null $podlesokThree
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Card $thirdcard
 * @method static \Illuminate\Database\Eloquent\Builder|Third newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Third newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Third query()
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereDensity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereKoefOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereKoefThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereKoefTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereOc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodlesokOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodlesokThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodlesokTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodrostOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodrostThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePodrostTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third wherePor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereThousands($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Third whereUpdatedAt($value)
 */
	class Third extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Box[] $box
 * @property-read int|null $box_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

