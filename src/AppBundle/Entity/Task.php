<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert; // to ADD validitio
use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="task", type="text")
     *  @Assert\NotBlank()
     */

    private $task;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="datetime")
     * @Assert\NotBlank(groups={"edit"})
     * @Assert\Type("\DateTime")
     */

    private $dueDate;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set task
     *
     * @param string $task
     *
     * @return Task
     */
    public function setTask($task) {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return string
     */
    public function getTask() {
        return $this->task;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Task
     */
    public function setDueDate(\DateTime $dueDate = null) {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate() {
        return $this->dueDate;
    }

}
