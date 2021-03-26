from instapy import InstaPy
        from instapy import smart_run
        from instapy import set_workspace
        set_workspace(path=None)
        session = InstaPy()
        with smart_run(session):
    session.set_skip_users(skip_private=False,
                       private_percentage=0)
    session.follow_user_followers(['', '', '', ''], amount=100, randomize=False, sleep_delay=90)
    session.unfollow_users(amount=375, nonFollowers=True, style='LIFO', unfollow_after=42*60*60, sleep_delay=355)