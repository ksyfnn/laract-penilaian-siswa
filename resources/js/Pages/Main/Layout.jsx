import React from 'react'
import '../../../css/style.css'
import headerImages from '../../../src/images/header.jpg'
import {Link, usePage} from '@inertiajs/inertia-react'
import {inertia} from '@inertiajs/inertia'

export default function Layout ({childern}) {
    const {user} = usePage().props.auth
    return (
        <>
        {/*---------------HEADER---------------*/}
        <div className='header'>
            <img src={headerImages} alt='' />
        </div>

        {/*---------------MENU---------------*/}
        <div className='menu'>
            <b>
                <a href="/home">HOME</a>
                {user.role == 'admin' ? (
                    <>
                        <a href="/guru/index">ADMIN</a>
                        <a href="/jurusan/index">JURUSAN</a>
                        <a href="/kelas/index">KELAS</a>
                        <a href="/siswa/index">SISWA</a>
                        <a href="/mapel/index">MATA PELAJARAN</a>
                        <a href="/mengajar/index">MENGAJAR</a>
                    </>
                ) : (
                    <a href='/nilai/index'>NILAI</a>
                )}
                <a href="/logout">LOGOUT</a>
            </b>
        </div>

        {/*---------------CONTENT---------------*/}
        <div className='content'>{childern}</div>

        {/*---------------FOOTER---------------*/}
        <div className='footer'>
            <b>
                <p className='mar'>2023 - UJIKOMP & LSP</p>
            </b>
        </div>
        </>

    )
}