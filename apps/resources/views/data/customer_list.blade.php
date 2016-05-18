@extends('layouts.master')
@section('navbar')
@section('sidebar')
@section('content')
<div class="col-md-12">
      <div class="page-main">
      <!-- Contacts Content Header -->
      <div class="page-header">
        <h1 class="page-title">Contact List</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>
      <!-- Contacts Content -->
      <div class="page-content page-content-table">
        <!-- Actions -->
        <div class="page-content-actions">
          <div class="pull-right">
            <div class="dropdown">
              <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false">
                More
                <span class="icon md-chevron-down" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">More</a></li>
                <li><a href="javascript:void(0)">More</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
          </div>
          <div class="btn-group btn-group-flat">
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon md-folder" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Trash</a></li>
                <li><a href="javascript:void(0)">Spam</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon md-tag" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Contacts -->
        <table class="table is-indent tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
        data-animate="fade" data-child="tr" data-selectable="selectable">
          <thead>
            <tr>
              <th class="pre-cell"></th>
              <th class="cell-30" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                  />
                  <label for="select_all"></label>
                </span>
              </th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Name</th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Phone</th>
              <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Email</th>
              <th class="suf-cell"></th>
            </tr>
          </thead>
          <tbody>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                  />
                  <label for="contacts_1"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/1.jpg" alt="...">
                </a>
                Herman Beck
              </td>
              <td class="cell-300">(119)-298-8025</td>
              <td>julio.williamson73@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_2"
                  />
                  <label for="contacts_2"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/2.jpg" alt="...">
                </a>
                Mary Adams
              </td>
              <td class="cell-300">(838)-780-5116</td>
              <td>heidi.morrison77@hotmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_3"
                  />
                  <label for="contacts_3"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/3.jpg" alt="...">
                </a>
                Caleb Richards
              </td>
              <td class="cell-300">(861)-579-6099</td>
              <td>raymond.byrd19@aol.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_4"
                  />
                  <label for="contacts_4"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/4.jpg" alt="...">
                </a>
                June Lane
              </td>
              <td class="cell-300">(210)-727-1136</td>
              <td>eileen.gordon24@yahoo.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_5"
                  />
                  <label for="contacts_5"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/5.jpg" alt="...">
                </a>
                Edward Fletcher
              </td>
              <td class="cell-300">(729)-682-8842</td>
              <td>jim.hunter32@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_6"
                  />
                  <label for="contacts_6"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/6.jpg" alt="...">
                </a>
                Crystal Bates
              </td>
              <td class="cell-300">(916)-801-4120</td>
              <td>zoe.perez69@yahoo.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_7"
                  />
                  <label for="contacts_7"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/7.jpg" alt="...">
                </a>
                Nathan Watts
              </td>
              <td class="cell-300">(320)-725-3333</td>
              <td>esther.kelly84@hotmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_8"
                  />
                  <label for="contacts_8"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/8.jpg" alt="...">
                </a>
                Heather Harper
              </td>
              <td class="cell-300">(386)-653-1983</td>
              <td>jacob.morgan95@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_9"
                  />
                  <label for="contacts_9"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/9.jpg" alt="...">
                </a>
                Willard Wood
              </td>
              <td class="cell-300">(130)-591-7236</td>
              <td>jacob.morgan95@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_10"
                  />
                  <label for="contacts_10"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../../global/portraits/10.jpg" alt="...">
                </a>
                Ronnie Ellis
              </td>
              <td class="cell-300">(769)-963-2966</td>
              <td>erin.miller29@yahoo.com</td>
              <td class="suf-cell"></td>
            </tr>
          </tbody>
        </table>
        <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
      </div>
    </div>
    
    <div class="site-action">
    <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
      <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
      <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
      <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-delete" aria-hidden="true"></i>
      </button>
      <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-folder" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</div>
@endsection
