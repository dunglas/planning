<?php
/*
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Application\PlanningBundle\Document;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Defines an Event calendar component.
 * Match a the rfc5545 iCal structure.
 *
 * @Document
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Event {
    /** @Id */
    protected $id;

    /** @Date */
    protected $created;

    /** @Date */
    protected $modified;

    /** @String */
    protected $summary;

    /** @String */
    protected $description;

    /** @Int */
    protected $priority;

    /** @String */
    protected $privacy;

    /** @String */
    protected $icalStatus;

    /** @EmbedMany(targetDocument="Recurrence") */
    protected $recurrences = array ();

    /** @Int */
    protected $flags;

    /** @Date */
    protected $eventStart;

    /** @String */
    protected $eventStartTz;

    /** @Date */
    protected $eventEnd;

    /** @String */
    protected $eventEndTz;

    /** @Int */
    protected $eventStamp;

    /** @Date */
    protected $alarmTime;

    /** @String */
    protected $alarmTimeTz;

    /** @Int */
    protected $alarmOffset;

    /** @Int */
    protected $alarmRelated;
    
    /** @Int */
    protected $alarmLastAck;

    /** @ReferenceOne(targetDocument="Calendar") */
    protected $calendar;

    /** @ReferenceMany(targetDocument="User") */
    protected $users = array ();

    /** @ReferenceOne(targetDocument="Location") */
    protected $location;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getModified() {
        return $this->modified;
    }

    public function setModified($modified) {
        $this->modified = $modified;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
    }

    public function getPrivacy() {
        return $this->privacy;
    }

    public function setPrivacy($privacy) {
        $this->privacy = $privacy;
    }

    public function getIcalStatus() {
        return $this->icalStatus;
    }

    public function setIcalStatus($icalStatus) {
        $this->icalStatus = $icalStatus;
    }

    public function getRecurrences() {
        return $this->recurrences;
    }

    public function setRecurrences($recurrences) {
        $this->recurrences = $recurrences;
    }

    public function getFlags() {
        return $this->flags;
    }

    public function setFlags($flags) {
        $this->flags = $flags;
    }

    public function getEventStart() {
        return $this->eventStart;
    }

    public function setEventStart($eventStart) {
        $this->eventStart = $eventStart;
    }

    public function getEventStartTz() {
        return $this->eventStartTz;
    }

    public function setEventStartTz($eventStartTz) {
        $this->eventStartTz = $eventStartTz;
    }

    public function getEventEnd() {
        return $this->eventEnd;
    }

    public function setEventEnd($eventEnd) {
        $this->eventEnd = $eventEnd;
    }

    public function getEventEndTz() {
        return $this->eventEndTz;
    }

    public function setEventEndTz($eventEndTz) {
        $this->eventEndTz = $eventEndTz;
    }

    public function getEventStamp() {
        return $this->eventStamp;
    }

    public function setEventStamp($eventStamp) {
        $this->eventStamp = $eventStamp;
    }

    public function getAlarmTime() {
        return $this->alarmTime;
    }

    public function setAlarmTime($alarmTime) {
        $this->alarmTime = $alarmTime;
    }

    public function getAlarmTimeTz() {
        return $this->alarmTimeTz;
    }

    public function setAlarmTimeTz($alarmTimeTz) {
        $this->alarmTimeTz = $alarmTimeTz;
    }

    public function getAlarmOffset() {
        return $this->alarmOffset;
    }

    public function setAlarmOffset($alarmOffset) {
        $this->alarmOffset = $alarmOffset;
    }

    public function getAlarmRelated() {
        return $this->alarmRelated;
    }

    public function setAlarmRelated($alarmRelated) {
        $this->alarmRelated = $alarmRelated;
    }

    public function getAlarmLastAck() {
        return $this->alarmLastAck;
    }

    public function setAlarmLastAck($alarmLastAck) {
        $this->alarmLastAck = $alarmLastAck;
    }

    public function getCalendar() {
        return $this->calendar;
    }

    public function setCalendar(Calendar $calendar) {
        $this->calendar = $calendar;
    }

    public function getUsers() {
        return $this->users;
    }

    public function setUsers($users) {
        $this->users = $users;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(Location $location) {
        $this->location = $location;
    }
}