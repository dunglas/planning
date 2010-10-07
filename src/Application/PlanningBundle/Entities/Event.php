<?php
namespace Application\PlanningBundle\Entities;
use Symfony\Components\Validator\Mapping\ClassMetadata;
use Symfony\Components\Validator\Constraints;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Defines an Event calendar component.
 *
 * @author dunglas
 * @Entity(repositoryClass="Application\PlanningBundle\Entities\EventRepository")
 * @HasLifecycleCallbacks
 */
class Event {
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="DateTime")
     */
    protected $created;

    /**
     * @Column(type="DateTime")
     */
    protected $modified;

    /**
     * @Column(type="string")
     */
    protected $summary;

    /**
     * @Column(type="string")
     */
    protected $description;

    /**
     * @Column(type="integer")
     */
    protected $priority;

    
    privacy TEXT,

    ical_status TEXT,
    recurrence_id INTEGER,
    recurrence_id_tz TEXT,

    -- CAL_ITEM_FLAG_PRIVATE = 1
    -- CAL_ITEM_FLAG_HAS_ATTENDEES = 2
    -- CAL_ITEM_FLAG_HAS_PROPERTIES = 4
    -- CAL_ITEM_FLAG_EVENT_ALLDAY = 8
    -- CAL_ITEM_FLAG_HAS_RECURRENCE = 16
    -- CAL_ITEM_FLAG_HAS_EXCEPTIONS = 32
    flags INTEGER,

    -- Event bits
    event_start INTEGER,
    event_start_tz TEXT,
    event_end INTEGER,
    event_end_tz TEXT,
    event_stamp INTEGER,

    -- Alarm bits
    alarm_time INTEGER,
    alarm_time_tz TEXT,
    alarm_offset INTEGER,
    alarm_related INTEGER,
    alarm_last_ack INTEGER
}
?>
