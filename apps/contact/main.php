<div class="app-body-inner">
  <div class="row-col row-col-xs b-b">
    <!-- column -->
    <div class="col-sm-2 col-md-2 w w-auto-sm b-r">
      <div class="row-col">
        <div class="row-row">
          <div class="row-body scrollable hover">
            <div class="row-inner">
              <div class="nav nav-pills nav-stacked m-t-sm">
                <a class="nav-link" ng-class="{'_600': (filter == '')}" ng-click="selectGroup({name:''})">ALL Contacts</a>
                <a ng-repeat="item in groups" ng-dblclick="editItem(item)" class="nav-link hover-anchor" ng-class="{'_600': item.selected}" ng-click="selectGroup(item)">
                  <span ng-click='deleteGroup(item)' class="pull-right text-muted hover-action"><i class="fa fa-times"></i></span>
                  <span class="block">{{ item.name ? item.name : 'Untitled' }}</span>
                  <input type="text" class="form-control form-control-sm pos-abt" ng-show="item.editing" ng-blur="doneEditing(item)" ng-model="item.name" style="top:3px;left:2px;width:98%" ui-focus="item.editing">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="p-a">
          <span bs-tooltip title="Double click to Edit" class="pull-right text-muted inline p-a-xs m-r-sm"><i class="fa fa-question"></i></span>
          <a href class="btn btn-sm white" ng-click="createGroup()"><i class="fa fa-plus fa-fw m-r-xs"></i> <span class="hidden-sm-down">New Group</span></a>
        </div>
      </div>
    </div>
    <!-- /column -->
    <!-- column -->
    <div class="col-sm-4 col-md-3 light bg b-r">
      <div class="row-col">
        <div class="p-a-xs b-b">
          <div class="input-group">
            <span class="input-group-addon no-border no-bg"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control no-border no-bg" placeholder="Search {{group.name ? group.name : 'All Contacts'}}" ng-model="query">
          </div>
        </div>
        <div class="row-row">
          <div class="row-body scrollable hover">
            <div class="row-inner">
              <div class="list inset">
                <div ng-repeat="item in items | filter:{group:filter} | filter:query | orderBy:'first' track by $index" class="list-item pointer" ng-class="{'dker': item.selected }" ng-click="selectItem(item)">
                  <div class="list-left">
                    <span class="w-40 avatar">
                      <img ng-src="{{item.avatar}}" class="img-circle">
                    </span>
                  </div>
                  <div class="list-body">
                    {{ item.first }} {{ item.last }}
                    <small class="block text-muted"><i class="fa fa-phone m-r-sm"></i>{{ item.mobile }}</small>
                    <span ng-hide="item.first || item.last">No Name</span>
                  </div>
                </div>
              </div>
              <div class="text-center pos-abt w-full" style="top:50%;" ng-hide="(items | filter:{group:filter} | filter:query).length">No Contacts</div>
            </div>
          </div>
        </div>
        <div class="p-a b-t text-center">
          <a href class="btn btn-sm white btn-addon" ng-click="createItem()"><i class="fa fa-plus fa-fw m-r-xs"></i> New Contact</a>
        </div>
      </div>
    </div>
    <!-- /column -->

    <!-- column -->
    <div class="col-sm-6 col-md-7">
      <div class="row-col">
        <div class="p-a-sm">
          <div>
            <a class="btn btn-sm white pull-right" ng-hide="!item" ng-click="deleteItem(item)"><i class="fa fa-times"></i></a>
            <a class="btn btn-sm white" ng-hide="item.editing" ng-click="editItem(item)">Edit</a>
            <a class="btn btn-sm white" ng-show="item.editing" ng-click="doneEditing(item)">Done</a>
          </div>
        </div>
        <div class="row-row">
          <div class="row-body">
            <div class="row-inner">
              <div class="padding">
                <div class="row-col h-auto m-b-lg">
                  <div class="col-sm-3">
                    <div class="avatar w-64 inline">
                      <img ng-src="{{item.avatar}}" ng-show="item.avatar">
                    </div>
                  </div>
                  <div class="col-sm-9 v-m h2 _300">
                    <div ng-hide="item.editing">{{item.first}} {{item.last}}</div>
                    <div ng-show="item.editing" class="p-l-xs">
                      <input type="text" placeholder="First" class="form-control w-sm inline" ng-model="item.first" >
                      <input type="text" placeholder="Last" class="form-control w-sm inline" ng-model="item.last" >
                    </div>
                  </div>
                </div>
                <!-- fields -->
                <div class="form-horizontal">
                  <div class="form-group row" ng-hide="!item.mobile && !item.editing">
                    <label class="col-sm-3 form-control-label">Mobile</label>
                    <div class="col-sm-9">
                      <p class="form-control-static" ng-hide="item.editing">{{item.mobile}}</p>
                      <input type="text" class="form-control" ng-show="item.editing" ng-model="item.mobile" >
                    </div>
                  </div>
                  <div class="form-group row" ng-hide="!item.home && !item.editing">
                    <label class="col-sm-3 form-control-label">Home</label>
                    <div class="col-sm-9">
                      <p class="form-control-static" ng-hide="item.editing">{{item.home}}</p>
                      <input type="text" class="form-control" ng-show="item.editing" ng-model="item.home" >
                    </div>
                  </div>
                  <div class="form-group row" ng-hide="!item.work && !item.editing">
                    <label class="col-sm-3 form-control-label">Work</label>
                    <div class="col-sm-9">
                      <p class="form-control-static" ng-hide="item.editing">{{item.work}}</p>
                      <input type="text" class="form-control" ng-show="item.editing" ng-model="item.work" >
                    </div>
                  </div>
                  <div class="form-group row" ng-hide="!item.company && !item.editing">
                    <label class="col-sm-3 form-control-label">Company</label>
                    <div class="col-sm-9">
                      <p class="form-control-static" ng-hide="item.editing">{{item.company}}</p>
                      <input type="text" class="form-control" ng-show="item.editing" ng-model="item.company" >
                    </div>
                  </div>
                  <div class="form-group row" ng-hide="!item.note && !item.editing">
                    <label class="col-sm-3 form-control-label">Note</label>
                    <div class="col-sm-9">
                      <p class="form-control-static" ng-hide="item.editing">{{item.note}}</p>
                      <textarea class="form-control" ng-show="item.editing" ng-model="item.note" rows="5"></textarea>
                    </div>
                  </div>
                </div>
                <!-- / fields -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /column -->
  </div>
</div>
