<?php 

namespace FreedomtechHosting\PolydockApp\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PolydockAppInstanceStatus: string implements HasColor, HasIcon, HasLabel
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
        return $this->getLabel();
    }


    public function getStatusDescription(): string
    {
        return $this->getLabel();
    }


    public function getLabel(): string
    {
        return match ($this) {
            self::NEW => 'New',
            self::PENDING_PRE_CREATE => 'Pending pre-create',   
            self::PRE_CREATE_RUNNING => 'Pre-create running',
            self::PRE_CREATE_COMPLETED => 'Pre-create completed',
            self::PRE_CREATE_FAILED => 'Pre-create failed',
            self::PENDING_CREATE => 'Pending create',
            self::CREATE_RUNNING => 'Create running',
            self::CREATE_COMPLETED => 'Create completed',
            self::CREATE_FAILED => 'Create failed',
            self::PENDING_POST_CREATE => 'Pending post-create',
            self::POST_CREATE_RUNNING => 'Post-create running',
            self::POST_CREATE_COMPLETED => 'Post-create completed',
            self::POST_CREATE_FAILED => 'Post-create failed',
            self::PENDING_PRE_DEPLOY => 'Pending pre-deploy',
            self::PRE_DEPLOY_RUNNING => 'Pre-deploy running',
            self::PRE_DEPLOY_COMPLETED => 'Pre-deploy completed',
            self::PRE_DEPLOY_FAILED => 'Pre-deploy failed',
            self::PENDING_DEPLOY => 'Pending deploy',
            self::DEPLOY_RUNNING => 'Deploy running',
            self::DEPLOY_COMPLETED => 'Deploy completed',
            self::DEPLOY_FAILED => 'Deploy failed',
            self::PENDING_POST_DEPLOY => 'Pending post-deploy',
            self::POST_DEPLOY_RUNNING => 'Post-deploy running',
            self::POST_DEPLOY_COMPLETED => 'Post-deploy completed',
            self::POST_DEPLOY_FAILED => 'Post-deploy failed',
            self::PENDING_PRE_REMOVE => 'Pending pre-remove',
            self::PRE_REMOVE_RUNNING => 'Pre-remove running',
            self::PRE_REMOVE_COMPLETED => 'Pre-remove completed',
            self::PRE_REMOVE_FAILED => 'Pre-remove failed',
            self::PENDING_REMOVE => 'Pending remove',
            self::REMOVE_RUNNING => 'Remove running',
            self::REMOVE_COMPLETED => 'Remove completed',
            self::REMOVE_FAILED => 'Remove failed',
            self::PENDING_POST_REMOVE => 'Pending post-remove',
            self::POST_REMOVE_RUNNING => 'Post-remove running',   
            self::POST_REMOVE_COMPLETED => 'Post-remove completed',
            self::POST_REMOVE_FAILED => 'Post-remove failed',
            self::REMOVED => 'Removed',
            self::PENDING_PRE_UPGRADE => 'Pending pre-upgrade',
            self::PRE_UPGRADE_RUNNING => 'Pre-upgrade running',
            self::PRE_UPGRADE_COMPLETED => 'Pre-upgrade completed',
            self::PRE_UPGRADE_FAILED => 'Pre-upgrade failed',
            self::PENDING_UPGRADE => 'Pending upgrade',
            self::UPGRADE_RUNNING => 'Upgrade running',
            self::UPGRADE_COMPLETED => 'Upgrade completed',
            self::UPGRADE_FAILED => 'Upgrade failed',
            self::PENDING_POST_UPGRADE => 'Pending post-upgrade',
            self::POST_UPGRADE_RUNNING => 'Post-upgrade running',
            self::POST_UPGRADE_COMPLETED => 'Post-upgrade completed',
            self::POST_UPGRADE_FAILED => 'Post-upgrade failed',
            self::RUNNING_HEALTHY => 'Running healthy',
            self::RUNNING_UNRESPONSIVE => 'Running unresponsive',
            self::RUNNING_UNHEALTHY => 'Running unhealthy',
        };
    }

    public function getColor(): string
    {
       return $this->getStatusColor();
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

    public function getIcon(): string
    {
        return $this->getStatusIcon();
    }   

    public function getStatusIcon(): string
    {
        return match ($this) {
            self::NEW => 'heroicon-o-sparkles',
            self::PENDING_PRE_CREATE => 'heroicon-o-clock',
            self::PRE_CREATE_RUNNING => 'heroicon-o-arrow-path',
            self::PRE_CREATE_COMPLETED => 'heroicon-o-check',
            self::PRE_CREATE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_CREATE => 'heroicon-o-clock',
            self::CREATE_RUNNING => 'heroicon-o-arrow-path',
            self::CREATE_COMPLETED => 'heroicon-o-check',
            self::CREATE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_POST_CREATE => 'heroicon-o-clock',
            self::POST_CREATE_RUNNING => 'heroicon-o-arrow-path',
            self::POST_CREATE_COMPLETED => 'heroicon-o-check',
            self::POST_CREATE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_PRE_DEPLOY => 'heroicon-o-clock',
            self::PRE_DEPLOY_RUNNING => 'heroicon-o-arrow-path',
            self::PRE_DEPLOY_COMPLETED => 'heroicon-o-check',
            self::PRE_DEPLOY_FAILED => 'heroicon-o-x-mark',
            self::PENDING_DEPLOY => 'heroicon-o-clock',
            self::DEPLOY_RUNNING => 'heroicon-o-arrow-path',
            self::DEPLOY_COMPLETED => 'heroicon-o-check',
            self::DEPLOY_FAILED => 'heroicon-o-x-mark',
            self::PENDING_POST_DEPLOY => 'heroicon-o-clock',
            self::POST_DEPLOY_RUNNING => 'heroicon-o-arrow-path',
            self::POST_DEPLOY_COMPLETED => 'heroicon-o-check',
            self::POST_DEPLOY_FAILED => 'heroicon-o-x-mark',
            self::PENDING_PRE_REMOVE => 'heroicon-o-clock',
            self::PRE_REMOVE_RUNNING => 'heroicon-o-arrow-path',
            self::PRE_REMOVE_COMPLETED => 'heroicon-o-check',
            self::PRE_REMOVE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_REMOVE => 'heroicon-o-clock',
            self::REMOVE_RUNNING => 'heroicon-o-arrow-path',
            self::REMOVE_COMPLETED => 'heroicon-o-check',
            self::REMOVE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_POST_REMOVE => 'heroicon-o-clock',
            self::POST_REMOVE_RUNNING => 'heroicon-o-arrow-path',
            self::POST_REMOVE_COMPLETED => 'heroicon-o-check',
            self::POST_REMOVE_FAILED => 'heroicon-o-x-mark',
            self::REMOVED => 'heroicon-o-trash',
            self::PENDING_PRE_UPGRADE => 'heroicon-o-clock',
            self::PRE_UPGRADE_RUNNING => 'heroicon-o-arrow-path',
            self::PRE_UPGRADE_COMPLETED => 'heroicon-o-check',
            self::PRE_UPGRADE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_UPGRADE => 'heroicon-o-clock',
            self::UPGRADE_RUNNING => 'heroicon-o-arrow-path',
            self::UPGRADE_COMPLETED => 'heroicon-o-check',
            self::UPGRADE_FAILED => 'heroicon-o-x-mark',
            self::PENDING_POST_UPGRADE => 'heroicon-o-clock',
            self::POST_UPGRADE_RUNNING => 'heroicon-o-arrow-path',
            self::POST_UPGRADE_COMPLETED => 'heroicon-o-check',
            self::POST_UPGRADE_FAILED => 'heroicon-o-x-mark',
            self::RUNNING_HEALTHY => 'heroicon-o-check-circle',
            self::RUNNING_UNRESPONSIVE => 'heroicon-o-exclamation-triangle',
            self::RUNNING_UNHEALTHY => 'heroicon-o-x-circle',
        };
    }

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getOptions(): array
    {
        return array_combine(
            array_column(self::cases(), 'value'),
            array_map(fn ($status) => $status->getLabel(), self::cases())
        );
    }
}