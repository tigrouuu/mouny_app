/*
Template Name: Appvilla - Creative Landing Page HTML Template.
Author: GrayGrids
*/

import { HSTabs as WOW } from 'preline/src'

(function () {
    //===== Prealoder

    window.onload = function () {
        window.setTimeout(fadeout, 500)
    }

    function fadeout() {
        document.querySelector('.preloader').style.opacity = '0'
        document.querySelector('.preloader').style.display = 'none'
    }

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        let header_navbar = document.querySelector('.navbar-area')
        let sticky = header_navbar.offsetTop

        let logo = document.querySelector('.navbar-brand img')
        if (window.pageYOffset > sticky) {
            header_navbar.classList.add('sticky')
            logo.src = 'images/logo/logo.svg'
        } else {
            header_navbar.classList.remove('sticky')
            logo.src = 'images/logo/white-logo.svg'
        }

        // show or hide the back-top-top button
        let backToTo = document.querySelector('.scroll-top')
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = 'flex'
        } else {
            backToTo.style.display = 'none'
        }
    }

    // section menu active
    function onScroll(event) {
        let sections = document.querySelectorAll('.page-scroll')
        let scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop

        for (let i = 0; i < sections.length; i++) {
            let currLink = sections[i]
            let val = currLink.getAttribute('href')
            let refElement = document.querySelector(val)
            let scrollTopMinus = scrollPos + 73
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document.querySelector('.page-scroll').classList.remove('active')
                currLink.classList.add('active')
            } else {
                currLink.classList.remove('active')
            }
        }
    }

    window.document.addEventListener('scroll', onScroll)

    // for menu scroll
    let pageLink = document.querySelectorAll('.page-scroll')

    pageLink.forEach((elem) => {
        elem.addEventListener('click', (e) => {
            e.preventDefault()
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            })
        })
    })

    // WOW active
    new WOW().init()

    let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button')
    filterButtons.forEach((e) =>
        e.addEventListener('click', () => {
            let filterValue = event.target.getAttribute('data-filter')
            iso.arrange({
                filter: filterValue,
            })
        }),
    )

    let elements = document.getElementsByClassName('portfolio-btn')
    for (let i = 0; i < elements.length; i++) {
        elements[i].onclick = function () {
            let el = elements[0]
            while (el) {
                if (el.tagName === 'BUTTON') {
                    el.classList.remove('active')
                }
                el = el.nextSibling
            }
            this.classList.add('active')
        }
    }

    //===== mobile-menu-btn
    let navbarToggler = document.querySelector('.mobile-menu-btn')
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle('active')
    })
})()
