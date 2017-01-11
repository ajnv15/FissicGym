Public Class mys


    Public Function insertar(query As String)
        Dim conn As New MySql.Data.MySqlClient.MySqlConnection
        Dim connStr As String
        Dim cmd As MySql.Data.MySqlClient.MySqlCommand


        connStr = "server=127.0.0.1;" _
            & "uid=root;" _
            & "pwd='';" _
            & "database=fissic;"

        conn.ConnectionString = connStr
        conn.Open()
        cmd = New MySql.Data.MySqlClient.MySqlCommand(query, conn)
        Dim resultados = cmd.ExecuteScalar()
        conn.Close()
        Return resultados
    End Function

    Function datos(query As String)
        Dim conn As New MySql.Data.MySqlClient.MySqlConnection
        Dim connStr As String
        Dim cmd As MySql.Data.MySqlClient.MySqlCommand
        Dim dt As New DataTable
        connStr = "server=127.0.0.1;" _
            & "uid=root;" _
            & "pwd='';" _
            & "database=fissic;"

        conn.ConnectionString = connStr
        conn.Open()
        Dim sqlreader As MySql.Data.MySqlClient.MySqlDataReader
        cmd = New MySql.Data.MySqlClient.MySqlCommand(query, conn)
        sqlreader = cmd.ExecuteReader()
        dt.Load(sqlreader)
        conn.Close()
        Return dt

    End Function
    Function paraTabla(query As String)

        Dim conn As New MySql.Data.MySqlClient.MySqlConnection
        Dim connStr As String
        Dim cmd As New MySql.Data.MySqlClient.MySqlCommand(query)
        Dim dt As New DataSet
        connStr = "server=127.0.0.1;" _
            & "uid=root;" _
            & "pwd='';" _
            & "database=fissic;"

        conn.ConnectionString = connStr
        conn.Open()

        Dim da As New MySql.Data.MySqlClient.MySqlDataAdapter(query, conn)
        da.Fill(dt)
        conn.Close()
        Return dt
    End Function


End Class
