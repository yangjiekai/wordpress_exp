/*
 * Generated by dheadgen(1).
 */

#ifndef	_PROBES_MYSQL_D
#define	_PROBES_MYSQL_D

#ifdef	__cplusplus
extern "C" {
#define MYSQL_DTRACE_DISABLED false
#else
#define MYSQL_DTRACE_DISABLED 0
#endif

#define	MYSQL_CONNECTION_START(arg0, arg1, arg2)
#define	MYSQL_CONNECTION_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_CONNECTION_DONE(arg0, arg1)
#define	MYSQL_CONNECTION_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_COMMAND_START(arg0, arg1, arg2, arg3)
#define	MYSQL_COMMAND_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_COMMAND_DONE(arg0)
#define	MYSQL_COMMAND_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_START(arg0, arg1, arg2, arg3, arg4)
#define	MYSQL_QUERY_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_DONE(arg0)
#define	MYSQL_QUERY_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_PARSE_START(arg0)
#define	MYSQL_QUERY_PARSE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_PARSE_DONE(arg0)
#define	MYSQL_QUERY_PARSE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_CACHE_HIT(arg0, arg1)
#define	MYSQL_QUERY_CACHE_HIT_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_CACHE_MISS(arg0)
#define	MYSQL_QUERY_CACHE_MISS_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_EXEC_START(arg0, arg1, arg2, arg3, arg4, arg5)
#define	MYSQL_QUERY_EXEC_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_QUERY_EXEC_DONE(arg0)
#define	MYSQL_QUERY_EXEC_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_ROW_START(arg0, arg1)
#define	MYSQL_INSERT_ROW_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_ROW_DONE(arg0)
#define	MYSQL_INSERT_ROW_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_UPDATE_ROW_START(arg0, arg1)
#define	MYSQL_UPDATE_ROW_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_UPDATE_ROW_DONE(arg0)
#define	MYSQL_UPDATE_ROW_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_DELETE_ROW_START(arg0, arg1)
#define	MYSQL_DELETE_ROW_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_DELETE_ROW_DONE(arg0)
#define	MYSQL_DELETE_ROW_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_READ_ROW_START(arg0, arg1, arg2)
#define	MYSQL_READ_ROW_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_READ_ROW_DONE(arg0)
#define	MYSQL_READ_ROW_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INDEX_READ_ROW_START(arg0, arg1)
#define	MYSQL_INDEX_READ_ROW_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INDEX_READ_ROW_DONE(arg0)
#define	MYSQL_INDEX_READ_ROW_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_RDLOCK_START(arg0, arg1)
#define	MYSQL_HANDLER_RDLOCK_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_WRLOCK_START(arg0, arg1)
#define	MYSQL_HANDLER_WRLOCK_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_UNLOCK_START(arg0, arg1)
#define	MYSQL_HANDLER_UNLOCK_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_RDLOCK_DONE(arg0)
#define	MYSQL_HANDLER_RDLOCK_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_WRLOCK_DONE(arg0)
#define	MYSQL_HANDLER_WRLOCK_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_HANDLER_UNLOCK_DONE(arg0)
#define	MYSQL_HANDLER_UNLOCK_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_FILESORT_START(arg0, arg1)
#define	MYSQL_FILESORT_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_FILESORT_DONE(arg0, arg1)
#define	MYSQL_FILESORT_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_SELECT_START(arg0)
#define	MYSQL_SELECT_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_SELECT_DONE(arg0, arg1)
#define	MYSQL_SELECT_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_START(arg0)
#define	MYSQL_INSERT_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_DONE(arg0, arg1)
#define	MYSQL_INSERT_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_SELECT_START(arg0)
#define	MYSQL_INSERT_SELECT_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_INSERT_SELECT_DONE(arg0, arg1)
#define	MYSQL_INSERT_SELECT_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_UPDATE_START(arg0)
#define	MYSQL_UPDATE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_UPDATE_DONE(arg0, arg1, arg2)
#define	MYSQL_UPDATE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_MULTI_UPDATE_START(arg0)
#define	MYSQL_MULTI_UPDATE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_MULTI_UPDATE_DONE(arg0, arg1, arg2)
#define	MYSQL_MULTI_UPDATE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_DELETE_START(arg0)
#define	MYSQL_DELETE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_DELETE_DONE(arg0, arg1)
#define	MYSQL_DELETE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_MULTI_DELETE_START(arg0)
#define	MYSQL_MULTI_DELETE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_MULTI_DELETE_DONE(arg0, arg1)
#define	MYSQL_MULTI_DELETE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_NET_READ_START()
#define	MYSQL_NET_READ_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_NET_READ_DONE(arg0, arg1)
#define	MYSQL_NET_READ_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_NET_WRITE_START(arg0)
#define	MYSQL_NET_WRITE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_NET_WRITE_DONE(arg0)
#define	MYSQL_NET_WRITE_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_READ_START(arg0, arg1, arg2, arg3)
#define	MYSQL_KEYCACHE_READ_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_READ_BLOCK(arg0)
#define	MYSQL_KEYCACHE_READ_BLOCK_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_READ_HIT()
#define	MYSQL_KEYCACHE_READ_HIT_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_READ_MISS()
#define	MYSQL_KEYCACHE_READ_MISS_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_READ_DONE(arg0, arg1)
#define	MYSQL_KEYCACHE_READ_DONE_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_WRITE_START(arg0, arg1, arg2, arg3)
#define	MYSQL_KEYCACHE_WRITE_START_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_WRITE_BLOCK(arg0)
#define	MYSQL_KEYCACHE_WRITE_BLOCK_ENABLED() MYSQL_DTRACE_DISABLED
#define	MYSQL_KEYCACHE_WRITE_DONE(arg0, arg1)
#define	MYSQL_KEYCACHE_WRITE_DONE_ENABLED() MYSQL_DTRACE_DISABLED

#ifdef  __cplusplus
}
#endif

#endif  /* _PROBES_MYSQL_D */
