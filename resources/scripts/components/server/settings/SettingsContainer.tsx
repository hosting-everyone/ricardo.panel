import React from 'react';
import tw from 'twin.macro';
import Can from '@/components/elements/Can';
import { ServerContext } from '@/state/server';
import CopyOnClick from '@/components/elements/CopyOnClick';
import TitledGreyBox from '@/components/elements/TitledGreyBox';
import FlashMessageRender from '@/components/FlashMessageRender';
import ServerContentBlock from '@/components/elements/ServerContentBlock';
import DeleteServerBox from '@/components/server/settings/DeleteServerBox';
import RenameServerBox from '@/components/server/settings/RenameServerBox';
import ReinstallServerBox from '@/components/server/settings/ReinstallServerBox';

export default () => {
    const uuid = ServerContext.useStoreState(state => state.server.data!.uuid);
    const node = ServerContext.useStoreState(state => state.server.data!.node);

    return (
        <ServerContentBlock title={'Settings'}>
            <FlashMessageRender byKey={'settings'} css={tw`mb-4`}/>
            <div css={tw`md:flex`}>
                <div css={tw`w-full md:flex-1 md:mr-10`}>
                    <TitledGreyBox title={'Debug Information'} css={tw`mb-6 md:mb-10`}>
                        <div css={tw`flex items-center justify-between text-sm`}>
                            <p>Node</p>
                            <code css={tw`font-mono bg-neutral-900 rounded py-1 px-2`}>{node}</code>
                        </div>
                        <CopyOnClick text={uuid}>
                            <div css={tw`flex items-center justify-between mt-2 text-sm`}>
                                <p>Server ID</p>
                                <code css={tw`font-mono bg-neutral-900 rounded py-1 px-2`}>{uuid}</code>
                            </div>
                        </CopyOnClick>
                    </TitledGreyBox>
                    <DeleteServerBox />
                </div>
                <div css={tw`w-full mt-6 md:flex-1 md:mt-0`}>
                    <Can action={'settings.rename'}>
                        <div css={tw`mb-6 md:mb-10`}>
                            <RenameServerBox/>
                        </div>
                    </Can>
                    <Can action={'settings.reinstall'}>
                        <ReinstallServerBox/>
                    </Can>
                </div>
            </div>
        </ServerContentBlock>
    );
};
