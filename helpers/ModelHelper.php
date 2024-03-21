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
     * App\Models\Address
     *
     * @property int $id
     * @property string $street
     * @property string $city
     * @property string $zip_code
     * @property string $country
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auditor> $auditor
     * @property-read int|null $auditor_count
     *
     * @method static \Database\Factories\AddressFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Address query()
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountry($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreet($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Address whereZipCode($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperAddress
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Animator
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\User|null $user
     *
     * @method static \Database\Factories\AnimatorFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Animator newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Animator newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Animator query()
     * @method static \Illuminate\Database\Eloquent\Builder|Animator whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Animator whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Animator whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperAnimator
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Answer
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $auditor_id
     * @property int $interaction_id
     * @property string|null $replyable_type
     * @property int|null $replyable_id
     * @property-read \App\Models\Auditor $auditor
     * @property-read \App\Models\Interaction $interaction
     * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $replyable
     *
     * @method static \Database\Factories\AnswerFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAuditorId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereInteractionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereReplyableId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereReplyableType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperAnswer
    {
    }
}

namespace App\Models{
    /**
     * App\Models\AnswerText
     *
     * @property int $id
     * @property string $content
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Answer|null $answer
     *
     * @method static \Database\Factories\AnswerTextFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText query()
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText whereContent($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|AnswerText whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperAnswerText
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Auditor
     *
     * @property int $id
     * @property string|null $phone
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int|null $address_id
     * @property-read \App\Models\Address|null $address
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
     * @property-read int|null $answers_count
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Message> $messages
     * @property-read int|null $messages_count
     * @property-read \App\Models\User|null $user
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Winner> $winners
     * @property-read int|null $winners_count
     *
     * @method static \Database\Factories\AuditorFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor query()
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor whereAddressId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor wherePhone($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Auditor whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperAuditor
    {
    }
}

namespace App\Models{
    /**
     * App\Models\CallToAction
     *
     * @property int $id
     * @property string $link
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Interaction|null $interaction
     *
     * @method static \Database\Factories\CallToActionFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction query()
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction whereLink($value)
     * @method static \Illuminate\Database\Eloquent\Builder|CallToAction whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperCallToAction
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Interaction
     *
     * @property int $id
     * @property string $title
     * @property \App\Enums\InteractionType $type
     * @property int|null $call_to_action_id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property \Illuminate\Support\Carbon|null $ended_at
     * @property int $animator_id
     * @property int|null $reward_id
     * @property-read int|null $winners_count
     * @property \App\Enums\InteractionStatus $status
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
     * @property-read int|null $answers_count
     * @property-read \App\Models\CallToAction|null $callToAction
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuestionChoice> $questionChoices
     * @property-read int|null $question_choices_count
     * @property-read \App\Models\Reward|null $reward
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Winner> $winners
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction active()
     * @method static \Database\Factories\InteractionFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction pending()
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction query()
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereAnimatorId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereCallToActionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereEndedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereRewardId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereStatus($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereTitle($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Interaction whereWinnersCount($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperInteraction
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Media
     *
     * @property int $id
     * @property string $path
     * @property \App\Enums\MediaType $type
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\Answer|null $answer
     *
     * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Media query()
     * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Media wherePath($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperMedia
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Message
     *
     * @property int $id
     * @property string $content
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $auditor_id
     * @property-read \App\Models\Auditor $auditor
     *
     * @method static \Database\Factories\MessageFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Message query()
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereAuditorId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereContent($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperMessage
    {
    }
}

namespace App\Models{
    /**
     * App\Models\QuestionChoice
     *
     * @property int $id
     * @property string $value
     * @property int $is_correct_answer
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $interaction_id
     * @property-read \App\Models\Interaction $interaction
     * @property-read \App\Models\Answer|null $replyable
     *
     * @method static \Database\Factories\QuestionChoiceFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice query()
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereInteractionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereIsCorrectAnswer($value)
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|QuestionChoice whereValue($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperQuestionChoice
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Reward
     *
     * @property int $id
     * @property string $name
     * @property string $description
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Interaction> $interactions
     * @property-read int|null $interactions_count
     *
     * @method static \Database\Factories\RewardFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Reward newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Reward newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Reward query()
     * @method static \Illuminate\Database\Eloquent\Builder|Reward whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Reward whereDescription($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Reward whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Reward whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Reward whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperReward
    {
    }
}

namespace App\Models{
    /**
     * App\Models\User
     *
     * @property int $id
     * @property string $name
     * @property string $email
     * @property \Illuminate\Support\Carbon|null $email_verified_at
     * @property mixed $password
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property string $roleable_type
     * @property int $roleable_id
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $roleable
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
     * @property-read int|null $tokens_count
     *
     * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleableId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleableType($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperUser
    {
    }
}

namespace App\Models{
    /**
     * App\Models\Winner
     *
     * @property int $id
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property int $interaction_id
     * @property int $auditor_id
     * @property-read \App\Models\Auditor $auditor
     * @property-read \App\Models\Interaction $interaction
     *
     * @method static \Database\Factories\WinnerFactory factory($count = null, $state = [])
     * @method static \Illuminate\Database\Eloquent\Builder|Winner newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Winner newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Winner query()
     * @method static \Illuminate\Database\Eloquent\Builder|Winner whereAuditorId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Winner whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Winner whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Winner whereInteractionId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Winner whereUpdatedAt($value)
     *
     * @mixin \Eloquent
     */
    class IdeHelperWinner
    {
    }
}
