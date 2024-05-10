<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWiz - Manage Posts</title>
</head>

<body>
    <div class="admin-background1">
        <div class="sidebar">
            <div class="logo"></div>
            <div class="sidebar-email">john@gmail.com</div>
            <div class="sidebar-title">Admin</div>
            <button class="panel-btn">Add Post</button>
            <button class="panel-btn">Manage Posts</button>
            <button class="panel-btn">Manage Readers</button>
            <button class="panel-btn">Messages</button>

        </div>
        <div class="mainbar">
            <div class="admin-dashboard-title">Manage Posts</div>
            <hr style="width: 100%;" />
            <div class="managepost-search-div">
                <input type="text" placeholder="Search..." class="managepost-search-input" />
                <select class="select-category-managepost">
                    <option>Category</option>
                    <option>Astrology</option>
                    <option>Technology</option>
                </select>
                <input class="date-input-managepost" type="date" />
                <span class="to-managepost"> to</span>
                <input class="date-input-managepost" type="date" />
                <button class="search-btn-managepost">Search</button>
            </div>
            <div class="image-panel">
                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img4.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">Teaching Africans How To Code With Smartphones, Not Computers</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>

                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img3.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">The Role of Ancient Peoples in Astrology: What Was Achieved?</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>
                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img5.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">Using Data Science To Get Black Communities Involved In Dutch Politics</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>
            </div>
            <div class="image-panel">
                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img4.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">Teaching Africans How To Code With Smartphones, Not Computers</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>

                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img3.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">The Role of Ancient Peoples in Astrology: What Was Achieved?</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>
                <div class="post-manage-details-panel">
                    <div class="latest-post-div" onclick="openPost();" style="background-image: url('images/img5.jpg');">
                        <div class="div5">

                            <div class="pill-main-div">
                                <div class="category-pill">Astrology</div>
                            </div>
                            <div class="main-title-sm">Using Data Science To Get Black Communities Involved In Dutch Politics</div>
                            <div class="main-date-sm">November 28, 2023</div>

                        </div>
                    </div>
                    <div class="set-up-panel">
                        <button class="search-btn-managepost">Update</button>
                        <button class="search-btn-managepost">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>