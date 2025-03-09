<?php 

namespace FreedomtechHosting\PolydockApp\Enums;

enum PolydockAppInstanceStatus: string
{
    case NEW = 'new';

    case PENDING_PRE_CREATE = 'pending-pre-create';
    case PRE_CREATE_RUNNING = 'pre-create-running';
    case PRE_CREATE_COMPLETED = 'pre-create-completed';
    case PRE_CREATE_FAILED = 'pre-create-failed';

    case PENDING_CREATE = 'pending-create';
    case CREATE_RUNNING = 'create-running';
    case CREATE_COMPLETED = 'create-completed';
    case CREATE_FAILED = 'create-failed';

    case PENDING_POST_CREATE = 'pending-post-create';
    case POST_CREATE_RUNNING = 'post-create-running';
    case POST_CREATE_COMPLETED = 'post-create-completed';
    case POST_CREATE_FAILED = 'post-create-failed';
    
    case PENDING_PRE_DEPLOY = 'pending-pre-deploy';
    case PRE_DEPLOY_RUNNING = 'pre-deploy-running';
    case PRE_DEPLOY_COMPLETED = 'pre-deploy-completed';
    case PRE_DEPLOY_FAILED = 'pre-deploy-failed';
    
    case PENDING_DEPLOY = 'pending-deploy';
    case DEPLOY_RUNNING = 'deploy-running';
    case DEPLOY_COMPLETED = 'deploy-completed';
    case DEPLOY_FAILED = 'deploy-failed';

    case PENDING_POST_DEPLOY = 'pending-post-deploy';
    case POST_DEPLOY_RUNNING = 'post-deploy-running';
    case POST_DEPLOY_COMPLETED = 'post-deploy-completed';
    case POST_DEPLOY_FAILED = 'post-deploy-failed';

    case RUNNING_HEALTHY = 'running-healthy';
    case RUNNING_UNRESPONSIVE = 'running-unresponsive';
    case RUNNING_UNHEALTHY = 'running-unhealthy';

    case PENDING_PRE_UPGRADE = 'pending-pre-upgrade';
    case PRE_UPGRADE_RUNNING = 'pre-upgrade-running';
    case PRE_UPGRADE_COMPLETED = 'pre-upgrade-completed';
    case PRE_UPGRADE_FAILED = 'pre-upgrade-failed';

    case PENDING_UPGRADE = 'pending-upgrade';
    case UPGRADE_RUNNING = 'upgrade-running';
    case UPGRADE_COMPLETED = 'upgrade-completed';
    case UPGRADE_FAILED = 'upgrade-failed';

    case PENDING_POST_UPGRADE = 'pending-post-upgrade';
    case POST_UPGRADE_RUNNING = 'post-upgrade-running';
    case POST_UPGRADE_COMPLETED = 'post-upgrade-completed';
    case POST_UPGRADE_FAILED = 'post-upgrade-failed';

    case PENDING_PRE_REMOVE = 'pending-pre-remove';
    case PRE_REMOVE_RUNNING = 'pre-remove-running';
    case PRE_REMOVE_COMPLETED = 'pre-remove-completed';
    case PRE_REMOVE_FAILED = 'pre-remove-failed';

    case PENDING_REMOVE = 'pending-remove';
    case REMOVE_RUNNING = 'remove-running';
    case REMOVE_COMPLETED = 'remove-completed';
    case REMOVE_FAILED = 'remove-failed';

    case PENDING_POST_REMOVE = 'pending-post-remove';
    case POST_REMOVE_RUNNING = 'post-remove-running';
    case POST_REMOVE_COMPLETED = 'post-remove-completed';
    case POST_REMOVE_FAILED = 'post-remove-failed';

    case REMOVED = 'removed';

    public function toString(): string
    {
        return $this->value;
    }

    public function getStatusMessage(): string
    {
        return match ($this) {
            self::NEW => 'New',
            self::PENDING_PRE_CREATE => 'Pending Pre-Create',   
            self::PRE_CREATE_RUNNING => 'Pre-Create Running',
            self::PRE_CREATE_COMPLETED => 'Pre-Create Completed',
            self::PRE_CREATE_FAILED => 'Pre-Create Failed',
            self::PENDING_CREATE => 'Pending Create',
            self::CREATE_RUNNING => 'Create Running',
            self::CREATE_COMPLETED => 'Create Completed',
            self::CREATE_FAILED => 'Create Failed',
            self::PENDING_POST_CREATE => 'Pending Post-Create',
            self::POST_CREATE_RUNNING => 'Post-Create Running',
            self::POST_CREATE_COMPLETED => 'Post-Create Completed',
            self::POST_CREATE_FAILED => 'Post-Create Failed',
            self::PENDING_PRE_DEPLOY => 'Pending Pre-Deploy',
            self::PRE_DEPLOY_RUNNING => 'Pre-Deploy Running',
            self::PRE_DEPLOY_COMPLETED => 'Pre-Deploy Completed',
            self::PRE_DEPLOY_FAILED => 'Pre-Deploy Failed',
            self::PENDING_DEPLOY => 'Pending Deploy',
            self::DEPLOY_RUNNING => 'Deploy Running',
            self::DEPLOY_COMPLETED => 'Deploy Completed',
            self::DEPLOY_FAILED => 'Deploy Failed',
            self::PENDING_POST_DEPLOY => 'Pending Post-Deploy',
            self::POST_DEPLOY_RUNNING => 'Post-Deploy Running',
            self::POST_DEPLOY_COMPLETED => 'Post-Deploy Completed',
            self::POST_DEPLOY_FAILED => 'Post-Deploy Failed',
            self::PENDING_PRE_REMOVE => 'Pending Pre-Remove',
            self::PRE_REMOVE_RUNNING => 'Pre-Remove Running',
            self::PRE_REMOVE_COMPLETED => 'Pre-Remove Completed',
            self::PRE_REMOVE_FAILED => 'Pre-Remove Failed',
            self::PENDING_REMOVE => 'Pending Remove',
            self::REMOVE_RUNNING => 'Remove Running',
            self::REMOVE_COMPLETED => 'Remove Completed',
            self::REMOVE_FAILED => 'Remove Failed',
            self::PENDING_POST_REMOVE => 'Pending Post-Remove',
            self::POST_REMOVE_RUNNING => 'Post-Remove Running',   
            self::POST_REMOVE_COMPLETED => 'Post-Remove Completed',
            self::POST_REMOVE_FAILED => 'Post-Remove Failed',
            self::REMOVED => 'Removed',
            self::PENDING_PRE_UPGRADE => 'Pending Pre-Upgrade',
            self::PRE_UPGRADE_RUNNING => 'Pre-Upgrade Running',
            self::PRE_UPGRADE_COMPLETED => 'Pre-Upgrade Completed',
            self::PRE_UPGRADE_FAILED => 'Pre-Upgrade Failed',
            self::PENDING_UPGRADE => 'Pending Upgrade',
            self::UPGRADE_RUNNING => 'Upgrade Running',
            self::UPGRADE_COMPLETED => 'Upgrade Completed',
            self::UPGRADE_FAILED => 'Upgrade Failed',
            self::PENDING_POST_UPGRADE => 'Pending Post-Upgrade',
            self::POST_UPGRADE_RUNNING => 'Post-Upgrade Running',
            self::POST_UPGRADE_COMPLETED => 'Post-Upgrade Completed',
            self::POST_UPGRADE_FAILED => 'Post-Upgrade Failed',
            self::RUNNING_HEALTHY => 'Running Healthy',
            self::RUNNING_UNRESPONSIVE => 'Running Unresponsive',
            self::RUNNING_UNHEALTHY => 'Running Unhealthy',
        };
    }

    public function getStatusColor(): string
    {
        return match ($this) {
            self::NEW => 'bg-gray-500',
            self::PENDING_PRE_CREATE => 'bg-yellow-500',
            self::PRE_CREATE_RUNNING => 'bg-yellow-500',
            self::PRE_CREATE_COMPLETED => 'bg-green-500',   
            self::PRE_CREATE_FAILED => 'bg-red-500',
            self::PENDING_CREATE => 'bg-yellow-500',
            self::CREATE_RUNNING => 'bg-yellow-500',
            self::CREATE_COMPLETED => 'bg-green-500',
            self::CREATE_FAILED => 'bg-red-500',
            self::PENDING_POST_CREATE => 'bg-yellow-500',
            self::POST_CREATE_RUNNING => 'bg-yellow-500',
            self::POST_CREATE_COMPLETED => 'bg-green-500',
            self::POST_CREATE_FAILED => 'bg-red-500',
            self::PENDING_PRE_DEPLOY => 'bg-yellow-500',
            self::PRE_DEPLOY_RUNNING => 'bg-yellow-500',
            self::PRE_DEPLOY_COMPLETED => 'bg-green-500',
            self::PRE_DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_DEPLOY => 'bg-yellow-500',
            self::DEPLOY_RUNNING => 'bg-yellow-500',
            self::DEPLOY_COMPLETED => 'bg-green-500',
            self::DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_POST_DEPLOY => 'bg-yellow-500',
            self::POST_DEPLOY_RUNNING => 'bg-yellow-500',
            self::POST_DEPLOY_COMPLETED => 'bg-green-500',
            self::POST_DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_PRE_REMOVE => 'bg-yellow-500',
            self::PRE_REMOVE_RUNNING => 'bg-yellow-500',
            self::PRE_REMOVE_COMPLETED => 'bg-green-500',
            self::PRE_REMOVE_FAILED => 'bg-red-500',
            self::PENDING_REMOVE => 'bg-yellow-500',
            self::REMOVE_RUNNING => 'bg-yellow-500',
            self::REMOVE_COMPLETED => 'bg-green-500',
            self::REMOVE_FAILED => 'bg-red-500',
            self::PENDING_POST_REMOVE => 'bg-yellow-500',
            self::POST_REMOVE_RUNNING => 'bg-yellow-500',
            self::POST_REMOVE_COMPLETED => 'bg-green-500',
            self::POST_REMOVE_FAILED => 'bg-red-500',
            self::REMOVED => 'bg-green-500',
            self::PENDING_PRE_UPGRADE => 'bg-yellow-500',
            self::PRE_UPGRADE_RUNNING => 'bg-yellow-500',
            self::PRE_UPGRADE_COMPLETED => 'bg-green-500',
            self::PRE_UPGRADE_FAILED => 'bg-red-500',
            self::PENDING_UPGRADE => 'bg-yellow-500',
            self::UPGRADE_RUNNING => 'bg-yellow-500',
            self::UPGRADE_COMPLETED => 'bg-green-500',
            self::UPGRADE_FAILED => 'bg-red-500',
            self::PENDING_POST_UPGRADE => 'bg-yellow-500',
            self::POST_UPGRADE_RUNNING => 'bg-yellow-500',
            self::POST_UPGRADE_COMPLETED => 'bg-green-500',
            self::POST_UPGRADE_FAILED => 'bg-red-500',
            self::RUNNING_HEALTHY => 'bg-green-500',
            self::RUNNING_UNRESPONSIVE => 'bg-yellow-500',
            self::RUNNING_UNHEALTHY => 'bg-red-500',
        };
    }

    public function getStatusIcon(): string
    {
        return match ($this) {
            self::NEW => 'new',
            self::PENDING_PRE_CREATE => 'pending-pre-create',
            self::PRE_CREATE_RUNNING => 'pre-create-running',
            self::PRE_CREATE_COMPLETED => 'pre-create-completed',
            self::PRE_CREATE_FAILED => 'pre-create-failed',
            self::PENDING_CREATE => 'pending-create',
            self::CREATE_RUNNING => 'create-running',
            self::CREATE_COMPLETED => 'create-completed',
            self::CREATE_FAILED => 'create-failed',
            self::PENDING_POST_CREATE => 'pending-post-create',
            self::POST_CREATE_RUNNING => 'post-create-running',
            self::POST_CREATE_COMPLETED => 'post-create-completed',
            self::POST_CREATE_FAILED => 'post-create-failed',
            self::PENDING_PRE_DEPLOY => 'pending-pre-deploy',
            self::PRE_DEPLOY_RUNNING => 'pre-deploy-running',
            self::PRE_DEPLOY_COMPLETED => 'pre-deploy-completed',
            self::PRE_DEPLOY_FAILED => 'pre-deploy-failed',
            self::PENDING_DEPLOY => 'pending-deploy',
            self::DEPLOY_RUNNING => 'deploy-running',
            self::DEPLOY_COMPLETED => 'deploy-completed',
            self::DEPLOY_FAILED => 'deploy-failed',
            self::PENDING_POST_DEPLOY => 'pending-post-deploy',
            self::POST_DEPLOY_RUNNING => 'post-deploy-running',
            self::POST_DEPLOY_COMPLETED => 'post-deploy-completed',
            self::POST_DEPLOY_FAILED => 'post-deploy-failed',
            self::PENDING_PRE_REMOVE => 'pending-pre-remove',
            self::PRE_REMOVE_RUNNING => 'pre-remove-running',
            self::PRE_REMOVE_COMPLETED => 'pre-remove-completed',
            self::PRE_REMOVE_FAILED => 'pre-remove-failed',
            self::PENDING_REMOVE => 'pending-remove',
            self::REMOVE_RUNNING => 'remove-running',
            self::REMOVE_COMPLETED => 'remove-completed',
            self::REMOVE_FAILED => 'remove-failed',
            self::PENDING_POST_REMOVE => 'pending-post-remove',
            self::POST_REMOVE_RUNNING => 'post-remove-running',
            self::POST_REMOVE_COMPLETED => 'post-remove-completed',
            self::POST_REMOVE_FAILED => 'post-remove-failed',
            self::REMOVED => 'removed',
            self::PENDING_PRE_UPGRADE => 'pending-pre-upgrade',
            self::PRE_UPGRADE_RUNNING => 'pre-upgrade-running',
            self::PRE_UPGRADE_COMPLETED => 'pre-upgrade-completed',
            self::PRE_UPGRADE_FAILED => 'pre-upgrade-failed',
            self::PENDING_UPGRADE => 'pending-upgrade',
            self::UPGRADE_RUNNING => 'upgrade-running',
            self::UPGRADE_COMPLETED => 'upgrade-completed',
            self::UPGRADE_FAILED => 'upgrade-failed',
            self::PENDING_POST_UPGRADE => 'pending-post-upgrade',
            self::POST_UPGRADE_RUNNING => 'post-upgrade-running',
            self::POST_UPGRADE_COMPLETED => 'post-upgrade-completed',
            self::POST_UPGRADE_FAILED => 'post-upgrade-failed',
            self::RUNNING_HEALTHY => 'running-healthy',
            self::RUNNING_UNRESPONSIVE => 'running-unresponsive',
            self::RUNNING_UNHEALTHY => 'running-unhealthy',
        };
    }

    public function getStatusDescription(): string
    {
        return match ($this) {
            self::NEW => 'New',
            self::PENDING_PRE_CREATE => 'Pending Pre-Create',
            self::PRE_CREATE_RUNNING => 'Pre-Create Running',
            self::PRE_CREATE_COMPLETED => 'Pre-Create Completed',
            self::PRE_CREATE_FAILED => 'Pre-Create Failed',
            self::PENDING_CREATE => 'Pending Create',
            self::CREATE_RUNNING => 'Create Running',
            self::CREATE_COMPLETED => 'Create Completed',
            self::CREATE_FAILED => 'Create Failed',
            self::PENDING_POST_CREATE => 'Pending Post-Create',
            self::POST_CREATE_RUNNING => 'Post-Create Running',
            self::POST_CREATE_COMPLETED => 'Post-Create Completed',
            self::POST_CREATE_FAILED => 'Post-Create Failed',
            self::PENDING_PRE_DEPLOY => 'Pending Pre-Deploy',
            self::PRE_DEPLOY_RUNNING => 'Pre-Deploy Running',
            self::PRE_DEPLOY_COMPLETED => 'Pre-Deploy Completed',
            self::PRE_DEPLOY_FAILED => 'Pre-Deploy Failed',
            self::PENDING_DEPLOY => 'Pending Deploy',
            self::DEPLOY_RUNNING => 'Deploy Running',
            self::DEPLOY_COMPLETED => 'Deploy Completed',
            self::DEPLOY_FAILED => 'Deploy Failed',
            self::PENDING_POST_DEPLOY => 'Pending Post-Deploy',
            self::POST_DEPLOY_RUNNING => 'Post-Deploy Running',
            self::POST_DEPLOY_COMPLETED => 'Post-Deploy Completed',
            self::POST_DEPLOY_FAILED => 'Post-Deploy Failed',
            self::PENDING_PRE_REMOVE => 'Pending Pre-Remove',
            self::PRE_REMOVE_RUNNING => 'Pre-Remove Running',
            self::PRE_REMOVE_COMPLETED => 'Pre-Remove Completed',
            self::PRE_REMOVE_FAILED => 'Pre-Remove Failed',
            self::PENDING_REMOVE => 'Pending Remove',
            self::REMOVE_RUNNING => 'Remove Running',
            self::REMOVE_COMPLETED => 'Remove Completed',
            self::REMOVE_FAILED => 'Remove Failed',
            self::PENDING_POST_REMOVE => 'Pending Post-Remove',
            self::POST_REMOVE_RUNNING => 'Post-Remove Running',
            self::POST_REMOVE_COMPLETED => 'Post-Remove Completed',
            self::POST_REMOVE_FAILED => 'Post-Remove Failed',
            self::REMOVED => 'Removed',
            self::PENDING_PRE_UPGRADE => 'Pending Pre-Upgrade',
            self::PRE_UPGRADE_RUNNING => 'Pre-Upgrade Running',
            self::PRE_UPGRADE_COMPLETED => 'Pre-Upgrade Completed',
            self::PRE_UPGRADE_FAILED => 'Pre-Upgrade Failed',
            self::PENDING_UPGRADE => 'Pending Upgrade',
            self::UPGRADE_RUNNING => 'Upgrade Running',
            self::UPGRADE_COMPLETED => 'Upgrade Completed',
            self::UPGRADE_FAILED => 'Upgrade Failed',
            self::PENDING_POST_UPGRADE => 'Pending Post-Upgrade',
            self::POST_UPGRADE_RUNNING => 'Post-Upgrade Running',
            self::POST_UPGRADE_COMPLETED => 'Post-Upgrade Completed',
            self::POST_UPGRADE_FAILED => 'Post-Upgrade Failed',
            self::RUNNING_HEALTHY => 'Running Healthy',
            self::RUNNING_UNRESPONSIVE => 'Running Unresponsive',
            self::RUNNING_UNHEALTHY => 'Running Unhealthy',
        };
    }
    
    public static function getValues(): array
    {
        return array_map(fn (PolydockAppInstanceStatus $status) => $status->value, self::cases());
    }
}